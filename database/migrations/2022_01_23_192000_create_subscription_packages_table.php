<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('icon');
            $table->integer('cost');
            $table->string('type');
            $table->string('sub_type');

            $table->date('start_date');
            $table->date('end_date');

            $table->string('status')->default('active');
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
        Schema::dropIfExists('subscription_packages');
    }
}
