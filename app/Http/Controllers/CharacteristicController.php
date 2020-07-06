<?php

namespace App\Http\Controllers;

use App\Characteristic;
use Auth;
use App\Pricing;
use Illuminate\Http\Request;

class CharacteristicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $characteristics = Characteristic::orderby('id', 'asc')->paginate(100);
            return view('users.admin.characteristics.index', ['characteristics' => $characteristics,]);
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $pricings = Pricing::orderby('id', 'asc')->paginate(100);
            return view('users.admin.characteristics.create', ['pricings'=> $pricings]);
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
            $characteristic = Characteristic::create($request->all());
            if(is_array($request->pricings_id))
            {
                foreach($request->pricings_id as $pricing_id)
                {
                    $pricing_found = Pricing::find($pricing_id);
                    $characteristic->pricings()->attach($pricing_found);
                }
            }
            return redirect('characteristics')->with('status', 'La caractérisitque a été ajoutée avec succès');
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function show(Characteristic $characteristic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function edit(Characteristic $characteristic)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $pricings = Pricing::orderby('id', 'asc')->paginate(100);
            return view('users.admin.characteristics.edit', ['characteristic' => $characteristic, 'pricings' => $pricings]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characteristic $characteristic)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $characteristic->update($request->all());
            foreach($request->pricings_id as $pricing_id)
            {
                $pricing_found = Pricing::find($pricing_id);
                if ($characteristic->pricings->contains($pricing_found->id)) {
                    continue;
                }
                else {
                    $characteristic->pricings()->attach($pricing_found);
                }

            }
            return redirect('characteristics')->with('status', 'La caractérisitque a été modifiée avec succès');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characteristic $characteristic)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $characteristic->delete();
            return redirect('characteristics')->with('status', 'La caractérisitque a été supprimée avec succès');
        }
        else {
            return redirect('home');
        }
    }


}
