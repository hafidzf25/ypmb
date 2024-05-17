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
        Schema::create('t_modul_pelatihan', function (Blueprint $table) {
            $table->id('id_modul_pelatihan');
            $table->unsignedBigInteger('id_modul');
            $table->unsignedBigInteger('id_pelatihan');
            $table->timestamps();

            $table->foreign('id_pelatihan')->references('id_pelatihan')->on('t_pelatihan');
            $table->foreign('id_modul')->references('id_modul')->on('t_modul');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_modul_pelatihan');
    }
};
