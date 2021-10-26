<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request){
        $response = Http::asForm()->post('http://127.0.0.1:8000/api/login',[
            'email' => $request['email'],
            'password' =>$request['password'],
        ]);
        if ($response['status'] == 200) {
            return view('home', compact('response'));
        }else{
            return view('auth.login', compact('response'));
        }
    }

}
