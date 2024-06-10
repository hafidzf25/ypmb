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
        Schema::create('t_seminar', function (Blueprint $table) {
            $table->id('id_seminar');
            $table->string('nama_seminar');
            $table->date('tanggal_seminar');
            $table->time('waktu_seminar');
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
        Schema::dropIfExists('t_seminar');
    }
};
