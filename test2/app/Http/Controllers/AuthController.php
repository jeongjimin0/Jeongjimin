<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    public function loginForm(): Factory|View|Application
    {
        return view('auth.loginForm');
    }

    public function login()
    {

    }

    public function registerForm(): Factory|View|Application
    {
        return view('auth.registerForm');
    }

    public function register()
    {

    }
}
