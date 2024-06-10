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
        Schema::create('t_partisipan_seminar', function (Blueprint $table) {
            $table->id('id_partisipan_seminar');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_seminar');
            $table->string('sertifikat')->nullable();

            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_seminar')->references('id_seminar')->on('t_seminar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_partisipan_seminar');
    }
};
