<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    public function reservations (){
        return $this->hasMany(Reservation::class);
    }
    public function categorieChambre () {

        return $this->belongsTo(categorieChambre::class);
    }
}