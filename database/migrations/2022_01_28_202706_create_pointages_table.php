<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages', function (Blueprint $table) {
            $table->id();
            $table->timestamp('heureArriveeMatinee');
            $table->timestamp('heureDepartMatinee');
            $table->string('motifJustificationRetardMatinee');
            $table->timestamp('heureArriveeSoiree');
            $table->timestamp('heureDepartSoiree');
            $table->string('motifJustificationRetardSoiree');
            $table->string('typePointage');
            $table->bigInteger('employe_id')->unsigned();
            //$table->bigInteger('marche_id')->unsigned()->nullable();
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
        Schema::dropIfExists('pointages');
    }
}
