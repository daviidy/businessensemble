<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Annonce;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            return view('users.admin.home');
        }
        elseif (Auth::user()->isInvestor()) {
            return view('users.investor.home');
        }
        else {
            return view('users.entrepreneur.home');
        }

    }



}
