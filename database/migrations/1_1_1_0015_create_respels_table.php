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
        Schema::create('respels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')
            ->references('id')
            ->on('branches');
            $table->string("register");
            $table->string("media_per_month");
            $table->string("movil_media");
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
        Schema::dropIfExists('respels');
    }
};
