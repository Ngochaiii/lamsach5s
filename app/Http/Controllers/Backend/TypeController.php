<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Position;
use App\Models\Type;
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

        // Get the position_id for "Blog làm sạch"
        $positionId = Position::TYPE_CLEANING_BLOG; // Assuming this constant is defined as 2

        // Create the category
        $category = new Types();
        $category->name = $request->input('name');
        $category->type = $type;
        $category->position_id = $positionId;
        $category->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Category created successfully');
    }
}
