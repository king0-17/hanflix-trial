<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $movies = Movie::latest()->paginate(5);

        return view('index',compact('movies'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $request->validate([
            'title' => 'required',
            'movie_url' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'language' => 'required',
            'year' => 'required',
            'upload_date' => 'required',
        ]);
        $input = $request->all();

        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/thumbnails';
            $movieThumbnail = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $movieThumbnail);
            $input['thumbnail'] = "$movieThumbnail";
        }
        Movie::create($input);

        return redirect()->route('index')
                        ->with('success','Movie created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
        return view('show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
        return view('edit', compact('movie'));
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
        //
        $request->validate([
            'title' => 'required',
            'movie_url' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' ,
            'language' ,
            'year' ,
            'upload_date' => 'required',
        ]);
        $input = $request->all();

        /*if ($image = $request->file('image')) {
            $destinationPath = 'images/thumbnails/';
            $movieImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $movieImage);
            $input['image'] = "$movieImage";
        }else{
            unset($input['image']);*/

        if ($thumbnail = $request->file('thumbnail')) {
            $destinationPath = 'images/thumbnails/';
            $movieThumbnail = date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $movieThumbnail);
            $input['thumbnail'] = "$movieThumbnail";
        }else{
            unset($input['thumbnail']);
        }

        $movie->update($input);

        return redirect()->route('index')
                        ->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();

        return redirect()->route('index')
            ->with('success','Movie deleted successfuly');
    }
}
