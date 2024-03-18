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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->integer("hc_code")->nullable();
            $table->string("name");
            $table->string("area")->nullable();
            $table->string("address");
            $table->string("operator_nit")->nullable();
            $table->foreignId('owner_id')
            ->references('id')
            ->on('owners');
            $table->foreignId('city_id')
            ->references('id')
            ->on('cities');
            $table->foreignId('location_id')
            ->references('id')
            ->on('locations');
            $table->foreignId('upz_id')
            ->references('id')
            ->on('upzs');
            $table->foreignId('watershed_id')
            ->references('id')
            ->on('watersheds');
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();
            $table->string("flag")->nullable();
            $table->string("sicom")->nullable();
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
        Schema::dropIfExists('branches');
    }
};
