<?php

namespace App\Http\Controllers;

use App\Annonce;
use App\Category;
use App\Team;
use App\Multimedia;
use App\User;
use Validator;
use Auth;
use Image;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $annonces = Annonce::orderby('id', 'asc')->paginate(30);
            return view('users.admin.annonces.index', ['annonces', $annonces]);
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
        if (Auth::check()) {
            return view('annonces.front.create');
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
        $annonce = Annonce::create($request->all());
        return redirect('/annonces/'.$annonce->id.'/edit');
    }

    //recommend
    public function recommend(Annonce $annonce)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $annonce->recommended = 1;
            $annonce->save();
            return redirect()->back()->with('status', 'L\'annonce été mise en avant avec succès');
        }
        else {
            return redirect('home');
        }

    }

    //unrecommend
    public function unrecommend(Annonce $annonce)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $annonce->recommended = 0;
            $annonce->save();
            return redirect()->back()->with('status', 'La mise en avant de l\'annonce a été annulée avec succès');
        }
        else {
            return redirect('home');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        $categories = Category::orderby('id', 'asc')->get();
        return view('annonces.front.edit', ['annonce' => $annonce, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        $annonce->update($request->all());

        if ($request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(storage_path('app/public/images/annonces/'.$filename));
            $annonce->logo = $filename;
            $annonce->save();
        }

        if ($request->hasFile('banner') ) {
            $image = $request->file('banner');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(storage_path('app/public/images/annonces/banners/'.$filename));
            $annonce->banner = $filename;
            $annonce->save();
        }

        $validation = Validator::make($request->all(), [
              'input2.*' => 'required|file|mimes:jpeg,png,jpg,pdf,mp3,mp4|max:10000'
          ],[
              'input2.*.required' => 'Please upload a file',
                'input2.*.mimes' => 'Only jpeg,png,jpg,pdf,mp3,mp4 files are allowed',
                'input2.*.max' => 'Sorry! Maximum allowed size for an image is 10MB',
          ]);

        if ($validation->passes()) {
            if ($request->hasFile('input2') ) {
              foreach ($request->file('input2') as $file) {
                $filename = $file->getClientOriginalName();
                $media = Multimedia::create([
                    'name' => $filename,
                    'project_id' => $project->id,
                ]);
                $file->move(storage_path('app/public/files/projects'), $filename);
              }
          }
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $annonce->delete();
            return redirect()->back()->with('status', 'L\'annonce été supprimée avec succès');
        }
        else {
            return redirect('home');
        }
    }
}
