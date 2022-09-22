<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_bookings', function (Blueprint $table) {
            $table->id('req_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
            $table->unsignedBigInteger('sp_id')->nullable();
            $table->foreign('sp_id')->references('id')->on('users')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('car_model');
            $table->string('car_brand');
            $table->string('car_year');
            $table->string('comment')->nullable();
            $table->string('client_location');
            $table->string('status');
            $table->date('date');
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
        Schema::dropIfExists('request_bookings');
    }
};
