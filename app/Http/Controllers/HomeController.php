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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // dd(Hash::make('test'));

        // dd(Hash::check('test', '$2y$10$kYwW2xIrnDqlJapggEWMIODWRN3Z5zf0jDw5I7Lvx3Eg/h0xednEy'));

        // dd(encrypt('test'));
        // dd(decrypt('eyJpdiI6InFjd1ZwS0FtR2Q1VGxHZ09HQjB1RWc9PSIsInZhbHVlIjoid1NkYzdjTmJcL1hzUkcwcGhBYkJpeVE9PSIsIm1hYyI6ImI5OTgwMTgzZTYwMjRiMDFhZmQwN2E4OTVkMGQ0OWE1ZmNjNTQyMGUwZDEzN2NkMTNlMmI5ZmMzMWI0MDdiNmMifQ=='));

        // dd(Crypt::encryptString('test'));
        // dd(Crypt::decryptString('eyJpdiI6InFjd1ZwS0FtR2Q1VGxHZ09HQjB1RWc9PSIsInZhbHVlIjoid1NkYzdjTmJcL1hzUkcwcGhBYkJpeVE9PSIsIm1hYyI6ImI5OTgwMTgzZTYwMjRiMDFhZmQwN2E4OTVkMGQ0OWE1ZmNjNTQyMGUwZDEzN2NkMTNlMmI5ZmMzMWI0MDdiNmMifQ=='));

        return view('home');
    }
}
