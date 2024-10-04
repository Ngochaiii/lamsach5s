<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Types;
use App\Models\SiteConfig;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $servicesPosts = Post::where('type', 'service')->get();
        $categories = Types::where('position_id', 2)->get();
        $config = SiteConfig::getConfig();
        $compacts =[
            'siteTitle' => 'Liên hệ',
            'servicesPosts' => $servicesPosts,
            'categories' => $categories,
            'config' => $config
        ];
        return view('web.contact.index',$compacts);
    }
}
