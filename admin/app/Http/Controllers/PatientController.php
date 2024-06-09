<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PatientController extends Controller
{
    public function index(): View
    {
        $patient = Patient::get();

        $templateData = [
            'sidebar' => 'patient',
            'access' => 'admin',
            'data' => $patient,
        ];

        return view('patient', $templateData);
    }
}
