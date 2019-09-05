<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('Organization');
            $table->string('Ticketing');
            $table->string('Transport');
            $table->string('Destinations/HotelBookings');
            $table->string('VisaDesk');
            $table->string('Turn-aroundTime');
            $table->string('OutOfTheBoxSolutions');
            $table->string('RateThe24hrDesk');
            $table->string('RelationshipWithAccountManager');
            $table->string('Suggestions');
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
        Schema::dropIfExists('customer_surveys');
    }
}
