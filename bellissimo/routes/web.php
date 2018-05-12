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

Route::get('/test', function(){
    return App\Category::find(5)->posts;
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
   
    Route::get('notification', 'HomeController@notification');

    Route::get('/home', [
        'uses'=>"HomeController@index",
        'as'=>'home'
    ]);

    Route::get('/product/create',[
        'uses'=>'ProductsController@create',
        'as'=>'product.create'
    ]);
    
    Route::post('/product/store',[
        'uses'=>'ProductsController@store',
        'as'=>'product.store'
    ]);

    Route::get('/products',[
        'uses'=>'ProductsController@index',
        'as' =>'products'

    ]);

    Route::get('/product/delete/{id}/',[
        'uses'=>'ProductsController@destroy',
        'as' =>'product.delete'

    ]);

    Route::get('/products/trashed/',[
        'uses'=>'ProductsController@trashed',
        'as' =>'products.trashed'

    ]);

    Route::get('/products/kill/{id}',[
        'uses'=>'ProductsController@kill',
        'as' =>'product.kill'

    ]);

    Route::get('/products/restore/{id}',[
        'uses'=>'ProductsController@restore',
        'as' =>'product.restore'

    ]);

    Route::get('/products/edit/{id}',[
        'uses'=>'ProductsController@edit',
        'as' =>'product.edit'

    ]);

    Route::post('/product/update/{id}',[
        'uses'=>'ProductsController@update',
        'as'=>'product.update'
    ]);

    Route::get('/category/create',[
        'uses'=>'Categories_Controller@create',
        'as' =>'category.create'

    ]);

    Route::post('/category/store/',[
        'uses'=>'Categories_Controller@store',
        'as'=> 'category.store'
    ]);

    Route::get('/categories',[
        'uses'=>'Categories_Controller@index',
        'as' =>'categories'

    ]);

    Route::get('/category/edit/{id}',[
        'uses'=>'Categories_Controller@edit',
        'as' =>'category.edit'

    ]);

    Route::get('/category/delete/{id}',[
        'uses'=>'Categories_Controller@destroy',
        'as' =>'category.delete'

    ]);

    Route::post('/category/update/{id}/',[
        'uses'=>'Categories_Controller@update',
        'as'=> 'category.update'
    ]);

});


