<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorisationsAbsenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorisations_absence', function (Blueprint $table) {
            $table->id();
            $table->timestamp('debut');
            $table->timestamp('fin');
            $table->string('motif');
            $table->bigInteger('employe_id')->unsigned();
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
        Schema::dropIfExists('autorisations_absence');
    }
}
