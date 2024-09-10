<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id('id_testimoni');
            $table->string('profile_img');
            $table->string('nama');
            $table->string('job');
            $table->string('testimoni');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};