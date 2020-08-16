<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{  protected  $fillable=['num_chambre','description','nombre_personne','prix','categorie_chambre_id'];
    public function reservations (){
        return $this->hasMany(Reservation::class);
    }
    public function categorieChambre () {

        return $this->belongsTo(categorieChambre::class);
    }
}