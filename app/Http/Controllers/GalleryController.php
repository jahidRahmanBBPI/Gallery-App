<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function create_album(){
        return view('gallery.album');
    }

    function all_album(){
        return view('gallery.all_album');
    }

    function view_album(){
        return view('gallery.view_album');
    }
}
