<?php

namespace Database\Seeders;

use App\Models\NilaiUts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiUtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NilaiUts::factory()->count(1)->create();
    }
}
