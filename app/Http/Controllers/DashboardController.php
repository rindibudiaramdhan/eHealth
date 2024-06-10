<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $templateData = [
            'sidebar' => 'dashboard',
            'access' => 'admin',
            'user' => Auth::user(),
            'patient_total' => Patient::count()
        ];

        return view('dashboard', $templateData);
    }
}
