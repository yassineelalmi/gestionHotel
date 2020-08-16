<?php

use App\Chambre;
use App\Client;
use App\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     $clients=Client::all();
          $chambres=Chambre::all();
        factory(App\Reservation::class,60)->make()->each(function ($reservation) use ($clients,$chambres) {
            $reservation->client_id=$clients->random()->id;
            $reservation->chambre_id=$chambres->random()->id;
            $reservation->save();
        }

    );
    }
}
