<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function view()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048', 
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // the file is uploading to /public/upload/images dir.
            $destinationPath = 'uploads/images';
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path($destinationPath), $fileName);

            return back()->with('success', 'File uploaded successfully in your uploads/images folder..')->with('file', $fileName);
        }

        return back()->withErrors(['file' => 'No file was uploaded.']);
    }
}
