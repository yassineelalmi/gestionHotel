<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{    protected $fillable=['nombre_adulte','nombre_enfant','date_debut','date_fin','statut','client_id','chambre_id'];
    // one opject off reservertion belongesto one opject off clinets (1.1)
    // belongsTo  =  yantami ila 
    public function client () {

        return $this->belongsTo(client::class);
    }
    public function chambre (){
        return $this->hasMany(chambre::class);
    }
}
