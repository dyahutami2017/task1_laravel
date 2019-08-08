<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gambar;
use File;

class showPromoController extends Controller{
    public function show(){
        $gambar=Gambar::get();
        return view('showPromo',['gambar'=>$gambar]);
    }
}