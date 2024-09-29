<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class CustomerRequestController extends Controller
{
    public function index(){
        $data_cus = Contact::all();
        $compact = [
            'data_cus' => $data_cus
        ];
        return view('admin.contact.index',$compact);
    }
}
