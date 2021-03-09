<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // if (auth()->attempt([
        //     'email' => 'aghamohammadi.mehdi20@gmail.com',
        //     'password' => 12345678
        // ])) {
        //     return 'yes';
        // }
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // auth()->logout();

        return view('home');
    }
}
