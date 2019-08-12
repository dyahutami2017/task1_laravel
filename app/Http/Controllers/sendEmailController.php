<?php

namespace App\Http\Controllers;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class sendEmailController extends Controller {
    public function index(){
        $send = DB::select('select*from identitas where level=:level',['level'=>1]);
        Mail::to ($send)->send(new SendEmail());
        return "Email telah dikirim";
    }
}