<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom_client', 50 );
            $table->string('prenom_client', 50 );
            $table->string('adresse', 50 );
            $table->string('ville', 50 );
            $table->string('pays', 20 );
            $table->string('telephone', 25 );
            $table->string('email', 100 );
            $table->string('cin', 25 );
            $table->string('Passport', 50 );


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
