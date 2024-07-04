<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => $this->faker->unique()->numerify('#########'), // Memastikan NIS adalah angka acak 9 digit
            'password' => bcrypt(123456), // Atur kata sandi default
            'nama' => $this->faker->name,
            'sex' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'agama_id' => $this->faker->numberBetween(1, 5), // Sesuaikan dengan ID agama yang ada di database
            'status' => 'Aktif',
            'anak_ke' => $this->faker->numberBetween(1, 10),
            'alamat' => $this->faker->address,
            'sekolah_asal' => $this->faker->company,
            'kelas_id' => $this->faker->numberBetween(1, 3), // Sesuaikan dengan ID kelas yang ada di database
            'tanggal_masuk' => $this->faker->date(),
            'ayah' => $this->faker->name('male'),
            'ibu' => $this->faker->name('female'),
            'pekerja_ayah' => $this->faker->jobTitle,
            'pekerja_ibu' => $this->faker->jobTitle,
        ];
    }
}