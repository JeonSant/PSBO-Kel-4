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
        Schema::create('sapis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sapi')->nullable();
            $table->string('foto_sapi')->nullable();
            $table->string('no_eartag')->nullable();
            $table->string('jenis_sapi')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->decimal('berat_badan', 5, 2)->nullable();
            $table->decimal('tinggi_pundak', 5, 2)->nullable();
            $table->decimal('lebar_dada', 5, 2)->nullable();
            $table->decimal('panjang_badan', 5, 2)->nullable();
            $table->string('status_kesehatan')->nullable();
            $table->text('keterangan_perawatan_khusus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sapis');
    }
};
