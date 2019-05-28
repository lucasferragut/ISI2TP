<?php

namespace App\modeles;

use Illuminate\Database\Eloquent\Model;
use App\Metier\Genre;
use DB;

class GenresDAO extends Model
{
    //
    public function getLesGenres()
    {
        $Genres = DB::table('genre')->get();
        $lesGenres = array();
        foreach ($Genres as $genre) {
            $idGenre = $genre->id_genre;
            $lesGenres[$idGenre] = $this->creerObjetMetier($genre);
        }
        return $lesGenres;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        $leGenre = new Genre();
        $leGenre->setIdGenre($objet->id_genre);
        $leGenre->setLibelleGenre($objet->lib_genre);
        return $leGenre;
    }
}
