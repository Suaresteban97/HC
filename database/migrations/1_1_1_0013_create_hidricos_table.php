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
        Schema::create('hidricos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')
            ->references('id')
            ->on('branches');
            $table->boolean("washer");
            $table->string("discharge");
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
        Schema::dropIfExists('hidricos');
    }
};
