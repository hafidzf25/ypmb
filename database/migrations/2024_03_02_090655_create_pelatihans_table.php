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
        Schema::create('t_pelatihan', function (Blueprint $table) {
            $table->id('id_pelatihan');
            $table->string('nama_pelatihan');
            $table->date('tanggal_awal');
            $table->date('tanggal_akhir');
            $table->string('foto_sampul');
            $table->text('deskripsi_singkat');
            $table->text('deskripsi_lengkap');
            $table->string('link')->nullable();
            $table->integer('status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pelatihan');
    }
};
