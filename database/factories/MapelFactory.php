<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mapel>
 */
class MapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_mapel' => $this->faker->unique(12)->word,
            'sks' => $this->faker->numberBetween(1, 6),
            'user_id' => 1,
            'kelompok_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
