<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('countryName');
            $table->string('countryCode');
            $table->string('regionName');
            $table->string('zipCode');
            $table->string('isoCode');
            $table->string('postalCode');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('metroCode');
            $table->string('areaCode');
            $table->integer('user_id')->unsigned()->unique();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_infos');
    }
}
