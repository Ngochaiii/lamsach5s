<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.edit');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        $banner = new Banner();
        $banner->title = $validated['title'];
        $banner->link = $validated['link'];
        $banner->is_active = $request->has('is_active');
        $banner->order = $validated['order'];

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('banners', 'public');
                $imagePaths[] = $path;
            }
        }
        $banner->images = json_encode($imagePaths);

        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner created successfully');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_images' => 'nullable|array',
            'remove_images.*' => 'string',
            'link' => 'nullable|url',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        $banner->title = $validated['title'];
        $banner->link = $validated['link'];
        $banner->is_active = $request->has('is_active');
        $banner->order = $validated['order'];

        $currentImages = json_decode($banner->images, true) ?: [];

        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $removeImage) {
                $key = array_search($removeImage, $currentImages);
                if ($key !== false) {
                    unset($currentImages[$key]);
                    Storage::disk('public')->delete($removeImage);
                }
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('banners', 'public');
                $currentImages[] = $path;
            }
        }

        $banner->images = json_encode(array_values($currentImages));
        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully');
    }
}
