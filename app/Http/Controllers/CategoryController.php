<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $categories = Category::orderby('id', 'asc')->paginate(30);
            return view('users.admin.categories.index', ['categories' => $categories]);
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
            return view('users.admin.categories.create');
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
            $category = Category::create($request->all());
            return redirect('categories')->with('status', 'La catégorie '.$category->name.' a bien été ajoutée');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('users.admin.categories.edit', ['category' => $category]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $category->update($request->all());
            return redirect('categories')->with('status', 'La catégorie '.$category->name.' a bien été modifiée');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $category->delete();
            return redirect('categories')->with('status', 'La catégorie '.$category->name.' a bien été supprimée');
        }
        else {
            return redirect('home');
        }
    }
}
