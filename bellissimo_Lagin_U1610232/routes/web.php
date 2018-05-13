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

Route::get('/', function () {
    return view('index');
});

Route::get('/ip_project_2', function () {
    return view('ip_project_2');
});

Route::get('/ip_project_2_dessert_course_meal', function () {
    return view('ip_project_2_dessert_course_meal');
});

Route::get('/ip_project_2_drinks_course_meal', function () {
    return view('ip_project_2_drinks_course_meal');
});

Route::get('/ip_project_2_fastFood_course_meal', function () {
    return view('ip_project_2_fastFood_course_meal');
});

Route::get('/ip_project_2_first_course_meal', function () {
    return view('ip_project_2_first_course_meal');
});

Route::get('/ip_project_2_second_course_meal', function () {
    return view('ip_project_2_second_course_meal');
});

Route::get('/ip_project_2_sign_in', function () {
    return view('ip_project_2_sign_in');
});

Route::get('/ip_project_2_vegan_course_meal', function () {
    return view('ip_project_2_vegan_course_meal');
});

Route::get('/ip_registration_form', function () {
    return view('ip_registration_form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    
    Route::get('/post/create',[
        'uses'=>'PostController@create',
        'as'=>'post.create'
    ]);
    
    Route::get('/post/store',[
        'uses'=>'PostController@store',
        'as'=>'post.store'
    ]);
});


