<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Genre_Controller extends Controller
{
    //

    public function getGenres(){
        $Genre = new GenreDAO();
        $lesGenres= $Genre->getLesGenress();
        return view('formGenre',compact('lesGenres'));
    }

}
