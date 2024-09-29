<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ho-ten' => 'required|max:400',
            'dien-thoai' => 'nullable|numeric|min:0210000000|max:0999999999',
            'dia-chi-email' => 'nullable|email|max:400',
            'noi-dung' => 'nullable|max:2000',
            'form_type' => 'required|in:tu_van,lien_he',
        ]);

        $contact = new Contact();
        $contact->name = $validatedData['ho-ten'];
        $contact->phone = $validatedData['dien-thoai'] ?? null;
        $contact->email = $validatedData['dia-chi-email'] ?? null;
        $contact->content = $validatedData['noi-dung'] ?? null;
        $contact->form_type = $validatedData['form_type'];
        $contact->save();

        return redirect()->back()->with('success', 'Thông tin của bạn đã được gửi thành công!');
    }
}
