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
        Schema::create('documents_branches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')
            ->references('id')
            ->on('documents');
            $table->foreignId('branch_id')
            ->references('id')
            ->on('branches');
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
        Schema::dropIfExists('documents_branches');
    }
};
