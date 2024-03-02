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
        Schema::create('t_isi_section', function (Blueprint $table) {
            $table->id('id_isi_section');
            $table->string('judul_section');
            $table->unsignedBigInteger('id_video');
            $table->unsignedBigInteger('id_modul');
            $table->timestamps();

            $table->foreign('id_video')->references('id_video')->on('t_video');
            $table->foreign('id_modul')->references('id_modul')->on('t_modul');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_isi_section');
    }
};
