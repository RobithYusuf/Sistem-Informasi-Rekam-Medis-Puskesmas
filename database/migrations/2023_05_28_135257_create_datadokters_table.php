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
        Schema::create('datadokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('telp', 13);
            $table->date('tgl_lahir');
            $table->string('alamat', 100);
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
        Schema::dropIfExists('datadokters');
    }
};