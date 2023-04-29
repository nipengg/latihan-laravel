<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class WebController extends Controller
{
    public function welcome(Request $request)
    {
        $data = Portfolio::all();
        return view('Welcome', compact('data'));
    }

    public function admin(Request $request)
    {
        return view('admin');
    }
    public function indexAdmin(Request $request)
    {
        return view('indexAdmin');
    }
}
