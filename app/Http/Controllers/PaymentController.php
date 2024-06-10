<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function index(): View
    {
        $templateData = [
            'sidebar' => 'payment',
            'access' => 'admin',
        ];

        return view('payment', $templateData);
    }
}
