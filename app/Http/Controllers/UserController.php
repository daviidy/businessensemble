<?php

namespace App\Http\Controllers;

use App\User;
use App\Annonce;
use Auth;
use Image;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function bienvenue()
    {
        $annonces = Annonce::orderby('id', 'asc')->paginate(15);
        return view('bienvenue', ['annonces', $annonces]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $users = User::orderby('id', 'asc')->paginate(30);
            return view('users.admin.users.index', ['users' => $users]);
        }
        else {
            return redirect('home');
        }

    }



    public function goToSearch(){
            $users = User::orderby('id', 'asc')->paginate(30);
            return view('users.search', ['users'=> $users]);
    }


    public function search(Request $request){
            if ($request->has('type') && $request->type !== 'Type') {
              if ($request->has('user')) {
                $users = User::where('type', $request->type)->where('name', 'like', '%'.$request->user.'%')->get();
                return view('users.search', ['users'=> $users]);
              }
              else {
                $users = User::where('type', $request->type)->get();
                return view('users.search', ['users'=> $users]);
              }

            }
            elseif ($request->has('user')) {
              $users = User::where('name', 'like', '%'.$request->user.'%')->get();
              return view('users.search', ['users'=> $users]);
            }
            else {
              return redirect()->back()->with('status', 'Aucun utilisateur trouvé');
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                return view('users.admin.users.show', ['user' => $user,]);
            }
            else {
                return view('users.show', ['user' => $user,]);
            }

        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::check()) {
            return view('users.edit', ['user' => $user,]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (Auth::check()) {
            $user->update($request->all());
            if ($request->hasFile('cover_image') ) {
                $image = $request->file('cover_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(storage_path('app/public/images/users/covers/'.$filename));
                $user->cover_image = $filename;
                $user->save();
            }
            return redirect('/users/'.$user->id.'/edit')->with('status', 'Votre profil a été modifié avec succès');
        }
        else {
            return redirect('home');
        }
    }


    //upload avatar with ajax
    public function uploadAvatar(Request $req)
    {
              $user = User::find($req->id_user);
              $user->update($req->all());

                $image = $req->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save(storage_path('app/public/images/users/'.$filename));
                $user->image = $filename;
                $user->save();


          return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
