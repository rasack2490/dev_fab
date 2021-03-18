<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('reser_email');
            $table->unsignedBigInteger('reser_horaire');
            $table->unsignedBigInteger('reser_day');
            $table->boolean('reserved');
            $table->timestamps();
            $table->foreign('reser_email')->references('email')->on('Users');
            $table->foreign('reser_horaire')->references('id_horaire')->on('horaires');
            $table->foreign('reser_day')->references('id_day')->on('days');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
