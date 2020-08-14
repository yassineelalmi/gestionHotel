<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{ 
    // one opject off reservertion belongesto one opject off clinets (1.1)
    // belongsTo  =  yantami ila 
    public function client () {

        return $this->belongsTo(client::class);
    }
    public function chambre (){
        return $this->hasMany(chambre::class);
    }
}
