<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();

          
            $table->bigInteger('company_profile_id')->unsigned();

            $table->string('listing_code')->nullable();

            $table->string('title')->nullable();

            $table->longText('description')->nullable();

            $table->string('location')->nullable();

            $table->string('google_map_url')->nullable();

            $table->integer('price')->nullable();

            $table->integer('display_price')->nullable();

            $table->integer('no_units')->nullable();

            $table->integer('views')->default(0);

            $table->string('property_type')->nullable();

            $table->string('unit_area')->nullable();

            $table->string('total_area')->nullable();



            $table->boolean('published')->nullable();

            $table->boolean('approved')->nullable();

            $table->boolean('booked')->nullable();

            $table->boolean('sold')->nullable();

            $table->boolean('recommended')->nullable();



            $table->bigInteger('company_subscription_id')->unsigned()->nullable();

            $table->foreign('company_profile_id')->references('id')->on('company_profiles');

            $table->foreign('company_subscription_id')->references('id')->on('company_subscriptions');

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
        Schema::dropIfExists('listings');
    }
}
