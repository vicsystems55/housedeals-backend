<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('listing_id')->unsigned();

            $table->bigInteger('buyer_id')->unsigned();

            $table->bigInteger('agent_id')->unsigned();

            $table->string('status')->default('active');

            $table->date('expiry_date');

            $table->foreign('listing_id')->references('id')->on('listings');

            $table->foreign('buyer_id')->references('id')->on('users');

            $table->foreign('agent_id')->references('id')->on('users');

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
        Schema::dropIfExists('bookings');
    }
}
