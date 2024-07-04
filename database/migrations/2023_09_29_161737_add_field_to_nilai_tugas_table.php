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
        Schema::table('nilai_tugas', function (Blueprint $table) {

            $table->foreign('mapel_id')->references('mapel_id')->on('mapels');
            $table->foreign('siswa_id')->references('siswa_id')->on('siswas');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('tahun_akademik_id')->references('tahun_akademik_id')->on('tahun_akademiks');
            $table->foreign('semester_id')->references('semester_id')->on('semesters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilai_tugas', function (Blueprint $table) {
            //
        });
    }
};
