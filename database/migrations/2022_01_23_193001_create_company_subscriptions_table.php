<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_subscriptions', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('company_profiles_id')->unsigned();

            $table->bigInteger('subscription_packages_id')->unsigned();

            $table->string('status')->default('active');

            $table->foreign('company_profiles_id')->references('id')->on('company_profiles');

            $table->foreign('subscription_packages_id')->references('id')->on('subscription_packages');

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
        Schema::dropIfExists('company_subscriptions');
    }
}
