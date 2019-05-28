<?php

namespace App\Http\Controllers;

use App\modeles\MangasDAO;
use App\modeles\GenresDAO;
use Illuminate\Http\Request;

class Mangas_Controller extends Controller
{
    //
    public function getLesMangas(){

        $Manga=new MangasDAO();
        $Genre=new GenresDAO();
        $lesGenres= $Genre->getLesGenres();
        $lesMangas = $Manga->getLesMangas($lesGenres);
        return view('listeMangas', compact('lesMangas','lesGenres'));
    }
}
