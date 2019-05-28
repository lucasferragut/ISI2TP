<?php

namespace App\modeles;

use Illuminate\Database\Eloquent\Model;
use App\Metier\Manga;
use DB;
class MangasDAO extends DAO
{
    //

    public function getLesMangas($lesGenres)
    {
        $Mangas = DB::table('manga')->get();
        $lesMangas = array();
        foreach ($Mangas as $Manga) {
            $idMang = $Manga->id_manga;
            $lesMangas[$idMang] = $this->creerObjetMetier($Manga);
        }
        return $lesMangas;
    }
    protected function creerObjetMetier(\stdClass $objet)
    {
        $leManga = new Manga();
        $leManga->setIdManga($objet->id_manga);
        $leManga->setPrix($objet->prix);
        $leManga->setTitre($objet->titre);
        $leManga->setCouverture($objet->couverture);
        $leManga->setGenre($objet->id_genre);

        return $leManga;
    }
}
