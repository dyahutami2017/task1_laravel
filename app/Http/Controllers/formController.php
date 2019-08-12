<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\identitas;
use App\Exports\identitasExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class formController extends Controller
{

    public function store(Request $request){
        
        DB::table('identitas')->insert([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'telepon' => $request -> telepon,
            'level' => $request -> check,
        ]);
        //$user=identitas::all();

        return redirect('/data');
        }

        public function show(){
            $user = DB::table('identitas')->paginate(10);
    
            return view('show',['user' => $user]);
            
        }

        public function cari(Request $request){
            $cari=$request->cari;

            $user=DB::table('identitas')
            ->where('nama','like',"%".$cari."%")
            ->paginate();

            return view('show',['user' => $user]);
        }
        public function index(){
            $user = identitas::all();
            return view('show',['user'=>$user]);            
        }

        public function export(){
            return Excel::download(new identitasExport, 'identitas.xlsx');
        }
}