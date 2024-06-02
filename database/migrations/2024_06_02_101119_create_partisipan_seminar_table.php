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
            $table->integer('id');
            $table->integer('id_seminar');
            $table->string('sertifikat');

            $table->timestamps();
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
