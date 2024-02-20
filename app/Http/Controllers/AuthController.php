<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Method to show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
