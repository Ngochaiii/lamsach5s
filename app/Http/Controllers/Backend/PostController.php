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
            'post_type' => 'required|in:service,blog,recruitment',
            'category' => 'required_if:post_type,blog,|exists:types,id',
            'content' => 'required',
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
        } elseif ($request->input('post_type') === 'recruitment') {
            $post->type_id = null; // Hoặc ID mặc định cho tuyển dụng nếu có
        } else {
            $post->type_id = $request->input('category');
        }


        $post->save();

        return redirect()->route('admin.post')->with('success', 'Bài viết đã được tạo thành công!');
    }
    public function search(Request $request)
    {
        $servicesPosts = Post::where('type', 'service')->get();
        $categories = Types::where('position_id', 2)->get();
        $recruitmentPosts = Post::where('type', 'recruitment')->get();
        $keyword = $request->input('s');
        // Kiểm tra nếu từ khóa rỗng
        if (empty($keyword)) {
            return redirect()->back()->with('error', 'Vui lòng nhập từ khóa tìm kiếm.');
        }
        // Xử lý và giới hạn độ dài từ khóa
        $keyword = substr($keyword, 0, 100); // Giới hạn độ dài từ khóa là 100 ký tự

        // Kiểm tra nếu từ khóa không hợp lệ
        if (strlen($keyword) < 3) {
            return redirect()->back()->with('error', 'Từ khóa phải có ít nhất 3 ký tự.');
        }
        // Tìm kiếm theo từ khóa trong cột 'title'
        $results = Post::where('title', 'like', '%' . $keyword . '%')->get();
        $compacts = [
            'posts' => Post::all(),
            'servicesPosts' => $servicesPosts,
            'categories' => $categories,
            'recruitmentPosts' => $recruitmentPosts,
            'results' => $results,
            'keyword' => $keyword

        ];
        return view('web.recruitment.search', $compacts);
    }
}
