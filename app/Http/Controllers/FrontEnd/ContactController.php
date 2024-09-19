<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $compacts =[
            'siteTitle' => 'Liên hệ'
        ];
        return view('web.contact.index',$compacts);
    }
}
