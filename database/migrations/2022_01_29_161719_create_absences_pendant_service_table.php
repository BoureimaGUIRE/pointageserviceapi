<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesPendantServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences_pendant_service', function (Blueprint $table) {
            $table->id();
            $table->decimal('duree');
            $table->string('periodeConstat');
            $table->string('motifJustification');
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
        Schema::table('absences_pendant_service', function(Blueprint $table){
            $table->dropForeign('pointage_id');
        });
        Schema::dropIfExists('absences_pendant_service');
    }
}
