<?php

namespace Database\Seeders;

use App\Models\NilaiHarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiHarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NilaiHarian::factory()->count(1)->create();
    }
}
