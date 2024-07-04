<?php

namespace Database\Seeders;

use App\Models\NilaiUas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiUasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NilaiUas::factory()->count(1)->create();
    }
}
