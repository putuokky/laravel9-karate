<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.auth.auth-login', [
            'title' => 'Login',
        ]);
    }

    public function login2()
    {
        return view('pages.auth.auth-login2', [
            'title' => 'Login',
        ]);
    }
}
