<?php

namespace App\Http\Controllers\Api\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'require|email',
            'password' => 'required|string'
        ]);

        if (!Auth::attempt([$login])) {
            response(['msg' => 'invalid login info']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return response([
            'user' => Auth::user(),
            'accessToken' => $accessToken,
        ]);
    }
}
