<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteConfig;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SiteConfigController extends Controller
{
    public function edit()
    {
        $config = SiteConfig::getConfig();
        return view('admin.site-config.edit', compact('config'));
    }

    public function update(Request $request)
    {
        $config = SiteConfig::getConfig();
        $data = $request->except('logo');

        // Handle logo upload
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $logoPath = $file->storeAs('public/web/images', $filename);
            $data['logo'] = Storage::url($logoPath); // Get the URL for the stored image

            // Delete old logo if exists
            if ($config->logo && Storage::exists(str_replace('/storage', 'public', $config->logo))) {
                Storage::delete(str_replace('/storage', 'public', $config->logo));
            }
        } elseif ($request->has('logo')) {
            // If logo is a string (existing filename), keep it as is
            $data['logo'] = $request->logo;
        }

        $config->update($data);
        return redirect()->back()->with('success', 'Cập nhật thông tin thành công');
    }
}
