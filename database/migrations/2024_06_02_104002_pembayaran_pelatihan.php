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
        Schema::create('t_partisipan_pembayaran_pelatihan', function (Blueprint $table) {
            $table->id('id_partisipan_pembayaran_pelatihan');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_pelatihan');
            $table->string('bukti_pembayaran');

            $table->timestamps();

            $table->foreign('id')->references('id')->on('users');
            $table->foreign('id_pelatihan')->references('id_pelatihan')->on('t_pelatihan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_partisipan_pembayaran_pelatihan');
    }
};
