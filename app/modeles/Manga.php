<?php

namespace App\modeles;

use Illuminate\Database\Eloquent\Model;
use DB;
class Manga extends Model
{
    //
    public function getLesMangas(){
        $mangas = DB::table('manga')->get();
        return $mangas;
    }
}
