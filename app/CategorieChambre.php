<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorieChambre extends Model
{
    public function chambres (){
        return $this->hasMany(chambre::class);
    } 
}