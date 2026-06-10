<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    function create_album(){
        return view('gallery.album');
    }

    function store_album(Request $request){

            $request->validate([
                'album_name' => 'required',
                'album_desc' => 'required',
                'album_thumbnail' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $album_cover = $request->file('album_thumbnail');
            $album_cover_name = time().'_' . md5(uniqid()) . '.'. $album_cover->getClientOriginalExtension();
            $album_cover->move(public_path('album_cover'), $album_cover_name);

            DB::table('album')->insert([
                'album_name' => $request->album_name,
                'album_desc' => $request->album_desc,
                'album_thumbnail' => $album_cover_name,
            ]);
            return redirect()->route('all.album')->with('success', 'Album created successfully!');
    }

    function all_album(){
        $albums = DB::table('album')->get();
        return view('gallery.all_album', compact('albums'));
    }

    function delete_album($id){
        DB::table('album')->where('id', $id)->delete();
        return redirect()->route('all.album')->with('success', 'Album deleted successfully!');
    }

    function view_album($id){
        return view('gallery.view_album', compact('id'));
    }

    function add_photo(){
        return view('gallery.add_photo');
    }

    function store_photo(Request $request){
        $request->validate([
            // 'album_id' => 'required',
            'photo_title' => 'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $photo_file = $request->file('photo');
        $photo_file_name = time().'_' . md5(uniqid()) . '.'. $photo_file->getClientOriginalExtension();
        $photo_file->move(public_path('album_photo'), $photo_file_name);
        
        // Store photo information in the database
        DB::table('photo')->insert([
            'album_id' => $request->album_id,
            'photo_name' => $request->photo_title,
            'photo_desc' => $request->photo_desc,
            'photo_file' => $photo_file_name,
        ]);
        // return redirect()->route('view.album')->with('success', 'Photo added successfully!');
    }
}
