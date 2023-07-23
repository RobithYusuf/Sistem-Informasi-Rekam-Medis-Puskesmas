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
        Schema::create('datapasien', function (Blueprint $table) {
            $table->id();
            $table->string('nik_kk', 20);
            $table->string('nama_kepala', 100);
            $table->string('kode_kk', 20);
            $table->string('nik', 20);
            $table->string('no_rm', 20);
            $table->string('no_kartu', 20);
            $table->string('alamat', 100);
            $table->enum('hubungan', ['suami', 'istri', 'anak']);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('agama', ['Islam', 'Kristen Protestan', 'Kristen Katolik', 'Hindu', 'Buddha', 'Khonghucu']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapasiens');
    }
};