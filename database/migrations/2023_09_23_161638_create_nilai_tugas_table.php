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
        Schema::create('nilai_tugas', function (Blueprint $table) {
            $table->id('tugas_id');
            $table->unsignedBigInteger('mapel_id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tahun_akademik_id');
            $table->unsignedBigInteger('semester_id');
            $table->float('nilai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_tugas');
    }
};
