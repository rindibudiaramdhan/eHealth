<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(): View
    {
        return view('login');
    }
}
