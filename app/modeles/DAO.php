<?php

namespace App\modeles;

use Illuminate\Database\Eloquent\Model;

abstract class DAO extends Model
{
    //
    protected abstract function creerObjetMetier(\stdClass $objet);
}
