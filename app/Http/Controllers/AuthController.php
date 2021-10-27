<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public $uri = 'http://127.0.0.1:8000/api/';
    public function login(Request $request){
        $response = Http::asForm()->post($this->uri.'login',[
            'email' => $request['email'],
            'password' =>$request['password'],
        ]);
        if ($response['status'] == 200) {
            $data = Http::get($this->uri.'libros');
            return view('home', compact('response', 'data'));
        }else{
            return view('auth.login', compact('response'));
        }
    }

}
