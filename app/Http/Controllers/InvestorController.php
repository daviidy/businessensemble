<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function investor()
    {
        return view('users.investor.home');
    }
}
