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
    return view('welcome');
});


Route::get('/shoutout/{text}', function ($text) {
  $colors = array(
                "red" => "for passion",
                "green" => "color of the nature",
                "blue" => "it is the color of the sky",
                "white" => "pureness",
                "black" => "being bold",
                "silver" => "authentic",
                "yellow" => "warmth"
  );
    return view('shoutout',
                array(
                  'text' => $text,
                  'colors' => $colors
                )
                );
})-> name('shoutout');

//
Route::get('/basic-arithmetic/{text}/{num1}/{num2}', function ($text, $num1, $num2) {
    return view('basic-arithmetic',
                array(
                  'text' => $text,
                  'num1' => $num1,
                  'num2' => $num2
                )
                );

})-> name('basic-arithmetic');


Route::get('/pages/shoutout/{text}', 'PagesController@shoutoutPage');
