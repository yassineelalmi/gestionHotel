<?php

use App\CategorieChambre;
use Illuminate\Database\Seeder;

class CategorieChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CategorieChambre::class,3)->create();
        }
}
