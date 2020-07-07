<?php

namespace App\Http\Controllers;

use App\Pricing;
use App\Characteristic;
use Auth;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $pricings = Pricing::orderby('id', 'asc')->paginate(100);
            return view('users.admin.pricings.index', ['pricings' => $pricings,]);
        }
        else {
            return redirect('home');
        }

    }


    public function indexFront()
    {
            $pricings = Pricing::orderby('id', 'asc')->paginate(100);
            return view('membership', ['pricings' => $pricings,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('users.admin.pricings.create');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::check() && Auth::user()->isAdmin()) {
            $pricing = Pricing::create($request->all());
            return redirect('pricings')->with('status', 'L\'offre a été ajoutée avec succès');
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('users.admin.pricings.edit', ['pricing' => $pricing]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $pricing->update($request->all());
            return redirect('pricings')->with('status', 'L\'offre a été modifiée avec succès');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $pricing->delete();
            return redirect('pricings')->with('status', 'L\'offre a été supprimée avec succès');
        }
        else {
            return redirect('home');
        }
    }
}
