<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;
use App\Review;
use App\People;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movies = DB::select('SELECT * FROM movies');
        // return view('movies.index')->with('movies',$movies);
        // $data = DB::table('movies')
        // ->take(2)
        // ->skip(2)
        // ->orderBy('movie_date','DESC')
        // ->select('movie_title','movie_date')
        // ->first()
        // ->pluck('movie_title');
        // ->where('movie_id',3)->get();
        // ->where('movie_budget','>',10000)->orwhere('movie_date','<','1997-01-01')->get();
        // ->whereBetween('movie_date',array('1990-01-01','1999-12-31'))->get();
        // ->whereNotBetween('movie_date',array('1990-01-01','1999-12-31'))->get();
        // ->whereIn('movie_id',array(1,2,5))->get();
        // ->whereNotIn('movie_id',array(1,2,5))->get();
        // ->count();
        // ->max('movie_budget');
        // ->min('movie_budget');
        // ->sum('movie_budget');
        // ->avg('movie_budget');

        // 关联 - join
        // $data = DB::table('movies')->join('reviews','movies.movie_id','=','reviews.movie_id')->select('movie_title','review_rate','review_content')->get();
        // print_r($data);
        // $movies = DB::table('movies')->get();

        // 模型
        // $movies = Movie::paginate(2);
        // // print_r($movies);
        // return view('movies.index')->with('movies',$movies);

        // 一对多的关系
        // $data = Movie::find(1)->reviews;
        // $data = Review::find(1)->movie->movie_title;
        // print_r($data);

        // 多对多的关系
        $data = Movie::find(1)->people;
        // $data = People::find(1)->movies;
        print_r($data);

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
        
        // DB::insert('INSERT INTO movies(movie_title,movie_content,movie_budget,movie_date) VALUES (?,?,?,?)',array($movie_title,$movie_content,$movie_budget,$movie_date));

        // DB::table('movies')->insert(array(
        //     'movie_title'   => $movie_title,
        //     'movie_content' => $movie_content,
        //     'movie_budget'  => $movie_budget,
        //     'movie_date'    => $movie_date
        // ));

        // 模型
        $movie = new Movie;
        $movie->movie_title = $movie_title;
        $movie->movie_content = $movie_content;
        $movie->movie_budget = $movie_budget;
        $movie->movie_date = $movie_date;
        $movie->save();

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
        $movie = Movie::with('reviews','people')->find($id);

        return view('movies.single')->with('movie',$movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $movie = DB::select('SELECT * FROM movies WHERE movie_id = ?',array($id));
        // $movie = DB::table('movies')->where('movie_id',$id)->first();

        // 模型

        $movie = Movie::find($id);

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
        
        // DB::update('UPDATE movies SET movie_title = ? ,movie_content = ?,movie_budget = ? ,movie_date = ? WHERE movie_id = ?',array($movie_title,$movie_content,$movie_budget,$movie_date,$id));

        // DB::table('movies')->where('movie_id',$id)->update(array(
        //     'movie_title'    => $movie_title,
        //     'movie_content'  => $movie_content,
        //     'movie_budget'   => $movie_budget,
        //     'movie_date'     => $movie_date
        // ));

        // 模型
        $movie = Movie::find($id);

        $movie->movie_title = $movie_title;
        $movie->movie_content = $movie_content;
        $movie->movie_budget = $movie_budget;
        $movie->movie_date = $movie_date;

        $movie->save();


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
        // DB::delete('DELETE FROM movies WHERE movie_id = ?',array($id));
        // DB::table('movies')->where('movie_id',$id)->delete();
        // 模型

        Movie::destroy($id);

        return redirect('movie');
    }
}
