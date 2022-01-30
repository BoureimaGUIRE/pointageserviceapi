<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementHeuresSupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiement_heures_sup', function (Blueprint $table) {
            $table->id();
            $table->decimal('totalHeures');
            $table->decimal('montantPaye');
            $table->string('semaineAnneeConcernee');
            $table->foreignId('pointage_id')->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paiement_heures_sup', function(Blueprint $table){
            $table->dropForeign('pointage_id');
        });
        Schema::dropIfExists('paiement_heures_sup');
    }
}
