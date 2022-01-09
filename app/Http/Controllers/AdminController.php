<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == "POST") {
            return $request->all();
        } else {
            return view('login');
        }
    }
    public function register(Request $request)
    {
        if ($request->getMethod() == "POST") {
            return $request->all();
        } else {
            return view('register');
        }
    }
}
