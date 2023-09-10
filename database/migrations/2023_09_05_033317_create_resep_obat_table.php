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
        Schema::create('resep_obat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_berobat');
            $table->foreign('id_berobat')->references('id')->on('berobat');
            $table->string('kode_obat');
            $table->foreign('kode_obat')->references('kode')->on('obat');
            $table->integer('dosis');
            $table->integer('aturan_minum');
            $table->integer('lama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep_obat');
    }
};
