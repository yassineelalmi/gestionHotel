<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

class AddCategorieChambreIdToChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chambres', function (Blueprint $table) {
            //foreing key table categorie chambre
            $table->foreignId("categorie_chambre_id")->constrained()->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('chambres', function (Blueprint $table) {
            
            $table->dropForeign('chambres_categorie_chambre_id_foreign');
        });
        Schema::enableForeignKeyConstraints();
    }
}
