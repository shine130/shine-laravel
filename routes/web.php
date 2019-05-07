<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('movie','MovieController');
Route::resource('movie/{movie_id}/reviews','ReviewController');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('movie',[
//     'uses' => 'Movie\MovieController@showMovieList',
//     'as'   => 'movie_list'
// ]);

// $url = route('movie_list');
// $url = action('Movie\MovieController@showMovieList');
// var_dump($url);

// Route::get('movie/{id}','Movie\MovieController@showMovie');

// Route::group(['prefix' => 'admin'], function(){
//     Route::get('user',function(){
//         return '管理用户';
//     });
//     Route::get('content',function(){
//         return '管理内容';
//     });
// });

// Route::get('user/login', ['as' => 'login',function () {
//     return '用户登录';
// }]);


// Route::get('user/login', function(){
//     return '用户登录';
// })->name('login');

// Route::get('user/profile',function(){
//     return redirect()->route('login');
// });


// Route::get('movie/{movie_id}',function($movie_id){
//     return '电影' . $movie_id;
// });

// Route::get('movie/{movie_id}/review/{review_id?}',function($movie_id,$review_id=null){
//     return '电影' . $movie_id . '里面的影评' . $review_id;
// });

// Route::match(['get','post'],'movie', function () {
//     return '电影';
// });

// Route::any('movie', function () {
//     return '电影';
// });



// Route::get('movie',function(){
//     return '电影列表';
// });

// Route::post('movie',function(){
//     return '发布电影';
// });

// Route::put('movie',function(){
//     return '修改电影';
// });

// Route::delete('movie',function(){
//     return '删除电影';
// });