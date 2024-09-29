<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Thêm dòng này
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'post_type' => 'required|in:service,blog',
        'category' => 'required_if:post_type,blog|exists:types,id',
        'content' => 'required',
        'picture_inputs' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle file upload
    $imagePath = null;
    if ($request->hasFile('picture_inputs')) {
        $file = $request->file('picture_inputs');
        $filename = time() . '_' . $file->getClientOriginalName();
        $imagePath = $file->storeAs('public/web/images', $filename);
        $imagePath = Storage::url($imagePath); // Get the URL for the stored image
    }

    // Lưu thông tin vào database
    $post = new Post();
    $post->title = $request->input('name');
    $post->slug = Str::slug($request->input('name'), '-');
    $post->image = $imagePath;
    $post->description = $request->input('description');
    $post->content = $request->input('content');
    $post->type = $request->input('post_type');

    // Xử lý loại bài viết và danh mục
    if ($request->input('post_type') === 'service') {
        $post->type_id = null; // Hoặc ID mặc định cho dịch vụ nếu có
    } else {
        $post->type_id = $request->input('category');
    }

    $post->save();

    return redirect()->route('admin.post')->with('success', 'Bài viết đã được tạo thành công!');
}
}
