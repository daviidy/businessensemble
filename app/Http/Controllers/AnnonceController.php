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

    //liste des annonces dans le back office
    public function indexAdmin()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $annonces = Annonce::orderby('id', 'asc')->paginate(30);
            return view('users.admin.annonces.index', ['annonces'=> $annonces]);
        }
        else {
            return redirect('home');
        }

    }

    //voir ses annonces
    public function myProjects(){
        if (Auth::check() && !Auth::user()->isAdmin()) {
            if (Auth::user()->isEntrepreneur()) {
                $annonces = Annonce::where('user_id', Auth::user()->id)->orderby('id', 'asc')->paginate(30);
                return view('users.entrepreneur.annonces.index', ['annonces'=> $annonces]);
            }
            else {
                return view('users.investor.annonces.index');
            }
        }
        else {
            return redirect('home');
        }
    }

    //saveProject
    public function saveProject(Annonce $annonce){
        if (Auth::check() && Auth::user()->isInvestor()) {
            Auth::user()->annonces()->attach($annonce, ['saved' => 1]);
            return redirect()->back()->with('status', 'L\'annonce a bien été enregistrée dans la liste de vos annonces');
        }
        else {
            return redirect('home');
        }
    }

    //showInterest
    public function showInterest(Annonce $annonce){
        if (Auth::check() && Auth::user()->isInvestor()) {
            Auth::user()->annonces()->attach($annonce, ['interest' => 1]);
            return redirect('/chat/'.$annonce->user_id);
        }
        else {
            return redirect('home');
        }
    }


    public function publishProject(Annonce $annonce)
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin() || Auth::user()->isEntrepreneur()) {
                $annonce->status = 1;
                $annonce->save();
                return redirect()->back()->with('status', 'Votre annonce a été publiée');
            }
            else {
                return redirect('home');
            }
        }
        else {
            return redirect('home');
        }

    }

    public function unpublishProject(Annonce $annonce)
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin() || Auth::user()->isEntrepreneur()) {
                $annonce->status = 0;
                $annonce->save();
                return redirect()->back()->with('status', 'Votre annonce a été mise en mode brouillon');
            }
            else {
                return redirect('home');
            }
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
        /*
        if (Auth::check()) {
            return view('annonces.front.create');
        }
        else {
            return redirect('home');
        }
        */
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
            return view('annonces.front.show', ['annonce' => $annonce]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        if (Auth::check() && $annonce->user_id == Auth::user()->id) {
            $categories = Category::orderby('id', 'asc')->get();
            return view('annonces.front.edit', ['annonce' => $annonce, 'categories' => $categories]);
        }
        else {
            return redirect('home');
        }
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
        //dd($request->has('vimeo'));
        /*
        $annonce->video = $request->youtube;
        $annonce->save();
        $annonce->update($request->all());

        */
        $annonce->update($request->all());


        if ($request->has('youtube') && $request->youtube !== " ") {
            $annonce->video = $request->youtube;
            $annonce->save();
        }
        elseif ($request->has('vimeo') && $request->vimeo !== " ") {
            $annonce->video = $request->vimeo;
            $annonce->save();
        }




        if ($request->hasFile('videoDownload') ) {
            $video = $request->file('videoDownload');
            $filename = time() . '.' . $video->getClientOriginalExtension();
            $video->move(storage_path('app/public/videos/annonces'), $filename);
            $annonce->video = $filename;
            $annonce->save();
        }

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

        $validationImage = Validator::make($request->all(), [
              'images.*' => 'required|file|mimes:jpeg,png,jpg|max:10000'
          ],[
              'images.*.required' => 'Please upload a file',
                'images.*.mimes' => 'Only jpeg,png,jpg files are allowed',
                'images.*.max' => 'Sorry! Maximum allowed size for an image is 10MB',
          ]);

        if ($validationImage->passes()) {
            if ($request->hasFile('images') ) {
              foreach ($request->file('images') as $file) {
                $filename = $file->getClientOriginalName();
                $media = Multimedia::create([
                    'name' => $filename,
                    'annonce_id' => $annonce->id,
                    'type' => 'image',
                ]);
                $file->move(storage_path('app/public/files/annonces'), $filename);
              }
          }
        }


        $validationBusinessPlan = Validator::make($request->all(), [
              'businessplan.*' => 'required|file|mimes:pdf,docx,csv,xslx|max:10000'
          ],[
              'businessplan.*.required' => 'Please upload a file',
                'businessplan.*.mimes' => 'Only pdf,docx,csv,xslx files are allowed',
                'businessplan.*.max' => 'Sorry! Maximum allowed size for a document is 10MB',
          ]);

        if ($validationBusinessPlan->passes()) {
            if ($request->hasFile('businessplan') ) {
              foreach ($request->file('businessplan') as $file) {
                $filename = $file->getClientOriginalName();
                $media = Multimedia::create([
                    'name' => $filename,
                    'annonce_id' => $annonce->id,
                    'type' => 'businessplan',
                ]);
                $file->move(storage_path('app/public/files/annonces'), $filename);
              }
          }
        }

        $validationFinancialPlan = Validator::make($request->all(), [
              'financialplan.*' => 'required|file|mimes:pdf,docx,csv,xslx|max:10000'
          ],[
              'financialplan.*.required' => 'Please upload a file',
                'financialplan.*.mimes' => 'Only pdf,docx,csv,xslx files are allowed',
                'financialplan.*.max' => 'Sorry! Maximum allowed size for a document is 10MB',
          ]);

        if ($validationFinancialPlan->passes()) {
            if ($request->hasFile('financialplan') ) {
              foreach ($request->file('financialplan') as $file) {
                $filename = $file->getClientOriginalName();
                $media = Multimedia::create([
                    'name' => $filename,
                    'annonce_id' => $annonce->id,
                    'type' => 'financialplan',
                ]);
                $file->move(storage_path('app/public/files/annonces'), $filename);
              }
          }
        }



        return redirect()->back()->with('status', 'L\'annonce a été modifiée avec succès');


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
