<?php

use App\CategorieChambre;
use App\Chambre;
use Illuminate\Database\Seeder;

class ChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie_chambres=CategorieChambre::all();

     factory(Chambre::class,100)->make()->each( function ($chambre) use ($categorie_chambres) {
         $chambre->categorie_chambre_id=$categorie_chambres->random()->id;
         $chambre->save();
     });
    }
}
