<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class UserController extends Controller
{
    public function login(Request $request){
        $response = Http::asForm()->post('http://127.0.0.1:8000/api/login',[
            'email' => $request['email'],
            'password' =>$request['password'],
        ]);
        if ($response['status'] == 200) {
            $data = Http::get('http://127.0.0.1:8000/api/usuarios/',[
                'id' => $request['id']
            ]);
            return view('home', compact('data'));
        }else{
            return view('auth.login', compact('response'));
        }
    }


    public function register(Request $request)
    {
        $response = Http::asForm()->post('http://127.0.0.1:8000/api/register',[
            'name' => $request['name'],
            'email' => $request['email'],
            'password' =>$request['password'],
        ]);
        if ($response['status'] != 200) {
            return view('auth.register', compact('response'));
        }
        return view('home', compact('response'));
    }

    public function destroy(Request $request)
    {
        $response = Http::destroy('http://127.0.0.1:8000/api/usuarios/',[
            'id' => $request['id'],
        ]);
        if ($response['status'] != 200) {
            return view('home', compact('response'));
        }
        return redirect('home',compact('response'));
    }
}
