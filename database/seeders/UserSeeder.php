<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(1)->create();


        // Menambahkan Administrator
        User::create([
            'name' => 'Administrator',
            'user_jab_id' => 1,
            'kelas_id' => 1,
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(123456),
            'remember_token' => Str::random(10)
        ]);

        // Menambahkan Guru
        User::create([
            'name' => 'Guru',
            'user_jab_id' => 2, // Sesuaikan dengan ID jabatan guru
            'kelas_id' => null, // Jika guru tidak memiliki kelas
            'username' => 'guru',
            'email' => 'guru@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(123456),
            'remember_token' => Str::random(10)
        ]);
    }
}
