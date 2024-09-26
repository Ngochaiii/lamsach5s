<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeController extends Controller
{
    public function index(){
        $compacts = [];
        return view('admin.type.index');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a unique 'type' (UUID or a random string)
        $type = Str::uuid(); // This generates a unique UUID

        // Alternatively, you could use a random string:
        // $type = Str::random(10); // Generates a random 10-character string

        // Create the category
        $category = new Types();
        $category->name = $request->input('name');
        $category->type = $type;
        $category->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Category created successfully');
    }
}
