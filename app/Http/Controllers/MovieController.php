<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = DB::select('SELECT * FROM movies');
        return view('movies.index')->with('movies',$movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie_title = $request->movie_title;
        $movie_content = $request->movie_content;
        $movie_budget = $request->movie_budget;
        $movie_date = $request->movie_date;
        
        DB::insert('INSERT INTO movies(movie_title,movie_content,movie_budget,movie_date) VALUES (?,?,?,?)',array($movie_title,$movie_content,$movie_budget,$movie_date));

        return redirect('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = DB::select('SELECT * FROM movies WHERE movie_id = ?',array($id));
        return view('movies.form')->with('movie',$movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie_title = $request->movie_title;
        $movie_content = $request->movie_content;
        $movie_budget = $request->movie_budget;
        $movie_date = $request->movie_date;
        
        DB::update('UPDATE movies SET movie_title = ? ,movie_content = ?,movie_budget = ? ,movie_date = ? WHERE movie_id = ?',array($movie_title,$movie_content,$movie_budget,$movie_date,$id));
        return redirect('movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM movies WHERE movie_id = ?',array($id));
        return redirect('movie');
    }
}
