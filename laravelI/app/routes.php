<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    //Return a string of to the page
	return 'Home page';
});

Route::get('services', function()
{
    return 'Services page';
});

Route::get('contact', function()
{
    return 'Contact Page';
});