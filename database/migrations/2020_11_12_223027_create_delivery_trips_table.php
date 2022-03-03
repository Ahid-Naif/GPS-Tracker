<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_trips', function (Blueprint $table) {
            $table->id();
            $table->boolean('isBoxOpen')->nullable();
            $table->string('box_code')->nullable();
            $table->string('humidity')->nullable();
            $table->string('temperature')->nullable();
            $table->string('location_link')->nullable();
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
        Schema::dropIfExists('delivery_trips');
    }
}
