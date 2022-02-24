<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->paginate(5);

        return view('movies.index', compact('movies'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'releasedate' => 'required',
            'runtime' => 'required',
            'rating' => 'required'
        ]);
        //create a new movie
        Movie::create($request->all());

        //redirect user and send friendly msg
        return redirect()->route('movies.index')->with('success', 'Movie created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
         //validate the input
         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'releasedate' => 'required',
            'runtime' => 'required',
            'rating' => 'required'
        ]);
        //create a new movie
        $movie->update($request->all());

        //redirect user and send friendly msg
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //delete product
        $movie->delete();

        //redirect user and display msg
        return redirect()->route('movies.index')->with('success', 'Movie successfully deleted');

    }
}
