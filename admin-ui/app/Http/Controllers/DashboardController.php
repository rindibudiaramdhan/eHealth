<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $templateData = [
            'sidebar' => 'dashboard',
            'access' => 'admin',
        ];

        return view('dashboard', $templateData);
    }
}
