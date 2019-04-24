<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpecialtyDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialty_doctor', function (Blueprint $table) {
            $table->integer('specialty_id')->unsigned();
            $table->integer('doctor_id')->unsigned();

            $table->foreign('specialty_id')->reference('id')->on('specialties');
            $table->foreign('doctor_id')->reference('id')->on('doctors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialty_doctor');
    }
}
