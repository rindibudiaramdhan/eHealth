<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PatientController extends Controller
{
    public function index(): View
    {
        $templateData = [
            'sidebar' => 'patient',
        ];

        return view('patient', $templateData);
    }
}
