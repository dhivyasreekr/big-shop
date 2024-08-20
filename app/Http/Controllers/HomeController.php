<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(Request $request)
    {
        return view('frontend/about');
    }
}
