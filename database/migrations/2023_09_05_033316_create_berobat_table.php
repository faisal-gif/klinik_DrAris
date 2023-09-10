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
        Schema::create('berobat', function (Blueprint $table) {
            $table->id();
            $table->string('id_pasien');
            $table->foreign('id_pasien')->references('nik')->on('pasien');
            $table->string('nip_dokter');
            $table->foreign('nip_dokter')->references('nip')->on('dokter');
            $table->date('tgl_berobat');
            $table->string('keluhan_pasien');
            $table->string('hasil_diagnosa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berobat');
    }
};
