<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Types;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index(string $slug)
    {
        $datas = Post::where('slug', $slug)->first();
        $servicesPosts = Post::where('type', 'service')->get();
        $categories = Types::where('position_id', 2)->get();
        $relatedPosts = Post::where('type_id', $datas->type_id)
                        ->where('id', '!=', $datas->id)
                        ->take(5)  // Giới hạn số lượng bài viết liên quan
                        ->get();
        $compact = [
            'datas' => $datas,
            'posts' => Post::all(),
            'servicesPosts' => $servicesPosts,
            'categories' => $categories,
            'relatedPosts' => $relatedPosts

        ];
        return view('web.post.detail', $compact);
    }
    public function list(string $type)
    {
        // Lấy danh mục hiện tại
        $currentCategory = Types::where('type', $type)->firstOrFail();

        // Lấy tất cả các danh mục blog làm sạch
        $categories = Types::where('position_id', 2)->get();

        // Lấy các bài viết thuộc danh mục hiện tại
        $posts = Post::where('type_id', $currentCategory->id)->paginate(6);

        // Lấy các bài viết dịch vụ (nếu cần)
        $servicesPosts = Post::whereHas('type', function ($query) {
            $query->where('position_id', 1); // Giả sử position_id 1 là cho dịch vụ
        })->get();

        $compact = [
            'currentCategory' => $currentCategory,
            'categories' => $categories,
            'posts' => $posts,
            'servicesPosts' => $servicesPosts
        ];

        // dd($compact); // Để debug, bạn có thể giữ dòng này

        return view('web.post.list', $compact);
    }
}
