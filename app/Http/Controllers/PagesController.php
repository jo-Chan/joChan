<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function shoutoutPage($text){
      $colors = array(
                    "red" => "for passion",
                    "green" => "color of the nature",
                    "blue" => "it is the color of the sky",
                    "white" => "pureness",
                    "black" => "being bold",
                    "silver" => "authentic",
                    "yellow" => "warmth"
       );
        return view('pages.shoutout',
                    array(
                      'text' => $text,
                      'colors' => $colors
                    )
                    );
    }

}
