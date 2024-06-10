<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function index(): View
    {
        $templateData = [
            'sidebar' => 'payment',
            'access' => 'admin',
            'user' => Auth::user()
        ];

        return view('payment', $templateData);
    }
}
