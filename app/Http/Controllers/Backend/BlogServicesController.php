<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogServicesController extends Controller
{
    public function index()
    {
        $services = BlogServices::all();
        return view('admin.blog_service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.blog_service.form');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateBlogService($request);

        $imagePath = $request->file('image')->store('blog_services', 'public');
        $validatedData['image'] = $imagePath;

        BlogServices::create($validatedData);

        return redirect()->route('blog-services.index')->with('success', 'Dịch vụ đã được tạo thành công.');
    }

    public function edit(BlogServices $blogService)
    {
        return view('admin.blog_service.form', compact('blogService'));
    }

    public function update(Request $request, BlogServices $blogService)
    {
        $validatedData = $this->validateBlogService($request, $blogService->id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($blogService->image);
            $imagePath = $request->file('image')->store('blog_services', 'public');
            $validatedData['image'] = $imagePath;
        }

        $blogService->update($validatedData);

        return redirect()->route('blog-services.index')->with('success', 'Dịch vụ đã được cập nhật thành công.');
    }

    public function destroy(BlogServices $blogService)
    {
        Storage::disk('public')->delete($blogService->image);
        $blogService->delete();
        return redirect()->route('blog-services.index')->with('success', 'Dịch vụ đã được xóa thành công.');
    }

    private function validateBlogService(Request $request, $id = null)
    {
        $rules = [
            'title' => 'required',
            'description' => 'nullable',
            'link' => 'nullable|url',
        ];

        if (!$id || $request->hasFile('image')) {
            $rules['image'] = 'required|image';
        }

        return $request->validate($rules);
    }
}
