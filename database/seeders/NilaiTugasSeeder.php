<?php

namespace Database\Seeders;

use App\Models\NilaiTugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NilaiTugas::factory()->count(1)->create();
    }
}
