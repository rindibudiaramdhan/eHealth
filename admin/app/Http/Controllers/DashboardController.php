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
        ];

        return view('dashboard', $templateData);
    }
}
