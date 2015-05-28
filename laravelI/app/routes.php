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
	return View::make('home');
});

Route::get('services', function()
{
    //Retrieve all services from the service table
    $services=Service::all();
    //pass the variable containing services to the service template

    return View::make('services', array('services'=>$services));
});

Route::get('contact', function()
{
    return View::make('contact');
});
Route::post('contact',function(){
    return 'Message has been sent. Thank you for contacting us';
});
