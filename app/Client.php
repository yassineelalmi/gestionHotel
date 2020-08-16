<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{     protected $fillable=['prenom_client', 'adresse', 'ville', 'pays','telephone','email','cin','passport'];
    //on opject of  client hasMany opjects of reservetion
    // hasMany = 3ando bzzf dyal ... 
    public function resevations(){
        return $this->hasMany(Reservation::class);
    }
}
