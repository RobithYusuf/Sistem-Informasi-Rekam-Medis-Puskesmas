<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('pelayanan', 100);
            $table->text('riwayat_alergi');
            $table->string('no_registrasi', 20);
            $table->enum('status', ['bpjs','umum']);
            $table->string('no_bpjs', 13);
            $table->timestamps();
        });

        Schema::create('datapendaftaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('pendaftaran_id')->references('id')->on('pemeriksaan')->onDelete('cascade');
            // ...
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapendaftarans');
    }
};