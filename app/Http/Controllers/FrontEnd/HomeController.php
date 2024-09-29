<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Types;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $servicesPosts = Post::where('type', 'service')->get();
        $categories = Types::where('position_id', 2)->get();
        $compacts =[
            'posts'=> Post::all(),
            'servicesPosts' => $servicesPosts,
            'categories' => $categories

        ];
        return view('web.index',$compacts);
    }
}
