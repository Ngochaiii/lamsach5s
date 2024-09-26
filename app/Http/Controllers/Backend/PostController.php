<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Thêm dòng này
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $types = Types::all();
        $compacts = [
            'types' => $types,
        ];
        return view('admin.post.index', $compacts);
    }
    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required',
            'type' => 'required',

        ]);

        // Handle file upload
        if ($request->hasFile('picture_inputs')) {
            $file = $request->file('picture_inputs'); // Single file
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('web/images'), $filename);
            $imagePath = 'web/images/' . $filename;
        } else {
            $imagePath = null; // If no file is uploaded, set to null
        }

        // Lưu thông tin vào database
        $post = new Post();
        $post->title = $request->input('name');
        $post->slug = Str::slug($request->input('name'), '-');
        $post->image = $imagePath;
        $post->description = $request->input('description');
        $post->type = $request->input('type');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
