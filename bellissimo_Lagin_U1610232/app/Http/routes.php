<?php

Route::get('/', function()
{
    return view('index');
});

Route::group(['middleware'=>['web']], function()
{
    //
});