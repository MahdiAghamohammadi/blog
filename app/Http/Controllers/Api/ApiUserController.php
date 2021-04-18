<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ApiUserController extends Controller
{
    public function all()
    {
        return User::all();
    }
}
