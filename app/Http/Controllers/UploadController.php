<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        //dd($request->file('image'));
        
        $path = $request->file('image')->store('uploads','public');
        // $request->fit(10,10);
        return view("admin.adminhome", ['path'=>$path]);

    //     $validated = $request->validate([
    //         'image' => 'required|file',
    //     ]);
        
    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('uploads', 'public');
    //         // return view("admin.adminhome", ['path' => $path]);
    //         return response('Ok', 200);
    //     }
        
    //     return response('No file uploaded.', 400);
    }
}

