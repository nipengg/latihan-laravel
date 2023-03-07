<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(Request $request){
        return view('welcome');
    }
    public function about(Request $request){
        return view('about');
    }
}
