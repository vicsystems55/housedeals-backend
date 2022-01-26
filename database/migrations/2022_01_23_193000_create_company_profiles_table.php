<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();

            $table->string('managing_directors_name')->nullable();
            $table->string('cac_no')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_website')->nullable();
            $table->string('business_email')->nullable();
            $table->string('contact_person')->nullable();

            $table->string('business_logo')->nullable();

            $table->string('doc1')->nullable();
            $table->string('doc2')->nullable();
            $table->string('doc3')->nullable();
            $table->string('doc4')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('company_profiles');
    }
}
