<?php

namespace Database\Factories;

use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NilaiTugas>
 */
class NilaiTugasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mapel_id' => Mapel::factory(),
            'siswa_id' => Siswa::factory(),
            'user_id' => 2,
            'tahun_akademik_id' => 1,
            'semester_id' => 1,
            'nilai' => $this->faker->randomFloat(2, 0, 100)
        ];
    }
}
