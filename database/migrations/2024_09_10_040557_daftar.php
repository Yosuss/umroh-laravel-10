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
        Schema::create('daftar', function (Blueprint $table) {
            $table->id('id_daftar');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('no');
            $table->timestamp('date');
            $table->string('jumlah');
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