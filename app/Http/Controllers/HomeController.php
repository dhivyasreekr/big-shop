<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend/home');
    }

    public function page_terms(Request $request)
    {
        return view('frontend/auth/page_terms');
    }

    public function about(Request $request)
    {
        return view('frontend/auth/about');
    }

    public function account(Request $request)
    {
        return view('frontend/auth/account');
    }

    public function privacy_policy(Request $request)
    {
        return view('frontend/auth/privacy_policy');
    }

    public function page_not_found(Request $request)
    {
        return view('frontend/page_not_found');
    }

    
}
