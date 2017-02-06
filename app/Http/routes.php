<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('create', function () {

    return view('form');
});

Route::post('store', function () {
    #create or insert
    DB::table('articles')->insert([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ]);
    echo "Success !";

});

Route::get('show/{id}', function ($id) {

    $article = DB::table('articles')->where('id', $id)->first();

    return view('show', compact('article'));
});

Route::get('edit/{id}', function ($id) {

    $article = DB::table('articles')->where('id', $id)->first();

    return view('edit', compact('article'));
});

Route::post('update/{id}', function ($id) {
    $article = DB::table('articles')->where('id', $id)->update([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ]);
    echo "Successfully Updated!";
});

Route::get('destroy/{id}', function ($id) {
    $article = DB::table('articles')->where('id', $id)->delete();
    echo "Successfully Destroyed!";
});

Route::get('/', function () {

    $articles = DB::table('articles')->get();

    return view('index', compact('articles'));

    #return view('index',['articles'=>$articles]);

    #update
    // DB::table('articles')->where('id', 2)->update(['title' => 'Hello Laravel']);

    #delete
    // DB::table('articles')->where('id', '<', 2)->delete();

    #read
    #dd(DB::table('articles')->get());
});
