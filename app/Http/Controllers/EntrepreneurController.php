<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepreneurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function entrepreneur()
    {
        return view('users.entrepreneur.entrepreneur');
    }
}
