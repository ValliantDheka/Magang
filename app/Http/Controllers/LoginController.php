<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
        // koma ini mengirimkan variable dengan nama books dan bisa ditampilkan di index
    }
}
