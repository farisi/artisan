<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cookie;

class AuthController extends Controller
{
    public function register(RegisterRequest $req)
    {
        $user = User::create($req->only('username','email') + [
            'password'=>Hash::make($req->password)
        ]);

        return response($user,Response::HTTP_CREATED);  
    }

    public function login(Request $req)
    {
        if(!Auth::attempt($req->only('email','password')))
        {
            return response([
                'error'=>'invalid crendential',
                Response::HTTP_UNAUTHORIZED
            ]);
        }
        $user=Auth::user();
        $jwt = $user->createToken('token')->plainTextToken;
        $cookie = cookie('jwt',$jwt,60*24); // durasi cookie sehari
        return response([
            'message'=>'berhasil melakukan login!'
        ])->withCookie($cookie);
    }

    public function user(Request $req)
    {
        return $req->user();
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');
        return response([
            'message'=>'Success'
        ])->withCookie($cookie);
    }
}
