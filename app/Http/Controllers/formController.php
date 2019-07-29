<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formController extends Controller
{

    public function store(Request $request){
        
        DB::table('identitas')->insert([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'telepon' => $request -> telepon
        ]);

        return redirect('/data');
        }

        public function show(){
            $user = DB::table('identitas')->paginate(10);
    
            return view('show',['user' => $user]);
            
        }
}