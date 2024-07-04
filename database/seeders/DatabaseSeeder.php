<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            TahunAkademikSeeder::class,
            SemesterSeeder::class,
            JabatanSeeder::class,
            AgamaSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
            KelompokSeeder::class,
            UserSeeder::class,
            MapelSeeder::class,
            NilaiHarianSeeder::class,
            NilaiTugasSeeder::class,
            NilaiUtsSeeder::class,
            NilaiUasSeeder::class,
        ]);
    }
}
