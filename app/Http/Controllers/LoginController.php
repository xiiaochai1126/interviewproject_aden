<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function check(Request $request)
    {
     $credentials = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) 
        {
            return redirect()->route('cat-images');
         }
          return "<h2>Username or Password Invalid, Please return to login page and login again!</h2>";  
    }
    public function showCatImages()
    {
        $response = Http::get('https://api.thecatapi.com/v1/images/search?limit=10');
        $catImages = $response->json();

        return view('login.home', compact('catImages'));
    }

}
