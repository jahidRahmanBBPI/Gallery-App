<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{
    function upload_image_storage(){
        return view('storage.SingleImageUpload');
    }

    function img_upload_storage(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            // $imageName = time().'_'.uniqid().'.'.$request->image->extension();
            // $request->image->storeAs('public/images', $imageName);
            // $request->file('image')->store('image', 'public');

            // Noman vai.
            $image = $request->file('image');
            $fileNameToStore = 'photo-' . md5(uniqid()) . '-' .time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $fileNameToStore);
            // ostad_practice\M10_Con_1\Data_Upload\storage\app\private\public\uploads(image store hobe ekhane)

            return back();
        }
        
    }

    function upload_multiple_image_storage(){
        return view('storage.MultipleImageUpload');
    }

    function img_upload_multiple_storage(Request $request){
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageNames = [];
        foreach ($request->file('images') as $image) {
            $imageName = time().'_'.uniqid().'.'.$image->extension();
            $image->storeAs('public/images', $imageName);
            $imageNames[] = $imageName;
            $image->store('images', 'public');
        }

        return back()->with('success','Images uploaded successfully.')->with('images',$imageNames);
    }
}
