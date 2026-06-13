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

        $photos = DB::table('album')->where('id', $id)->first();
        $removedFile = unlink(public_path('album_cover/'.$photos->album_thumbnail));
        if($removedFile){
            $photos = DB::table('photo')->where('album_id', $id)->get();
            foreach($photos as $photo){
                unlink(public_path('album_photo/'.$photo->photo));
                DB::table('photo')->where('album_id', $id)->delete();
            }
            DB::table('album')->where('id', $id)->delete();
            
        }

        return redirect()->route('all.album')->with('success', 'Album deleted successfully!');
    }

    function view_album($id = null){
        $albumA = DB::table('album')->where('id', $id)->first();
        $photo = DB::table('album')
                ->leftJoin('photo', 'album.id', '=', 'photo.album_id')
                ->where('album.id', $id)
                ->get();
        return view('gallery.view_album', [
            'album' => $albumA,
            'photos' => $photo,
        ]);
    }

    function add_photo($id){
        // $album = DB::table('album')->where('id', $id)->first('id');
        // dd($album);
        return view('gallery.add_photo',[
            'album_id' => $id,
        ]);
    }

    function store_photo(Request $request){
        // dd($request->all());
        $request->validate([
            'album_id' => 'required',
            'photo_title' => 'required|string|max:30',
            'photo_desc' => 'nullable|string|max:255',
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $photo_file = $request->file('photo');
        $photo_file_name = time().'_' . md5(uniqid()) . '.'. $photo_file->getClientOriginalExtension();
        $photo_file->move(public_path('album_photo'), $photo_file_name);
        
        // Store photo information in the database
        DB::table('photo')->insert([
            'album_id' => $request->album_id,
            'photo_name' => $request->photo_title,
            'photo' => $photo_file_name,
            'photo_desc' => $request->photo_desc,
        ]);
        // return redirect()->route('view.album')->with('success', 'Photo added successfully!');
        return redirect()->back()->with('success', 'success');
    }

    // Photo Delete.
    function delete_photo($id){
        DB::table('photo')->where('id', $id)->delete();
        // return redirect()->route('')->with('delete', 'Photo Delete Successfully!');
        return back();
    }
}
