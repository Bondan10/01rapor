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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('siswa_id');
            $table->string('nis')->unique();
            $table->string('password');
            $table->string('nama');
            $table->enum('sex', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->unsignedBigInteger('agama_id');
            $table->enum('status', ['Aktif', 'Nonaktif']);
            $table->integer('anak_ke');
            $table->text('alamat');
            $table->string('sekolah_asal')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->string('pekerja_ayah')->nullable();
            $table->string('pekerja_ibu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
