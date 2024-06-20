<?php

namespace Database\Factories;

use App\Models\siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jadwal>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matkul' => $this->faker->randomElement(['Pemrograman_Web', 'Basis_Data', 'Algoritma', 'Kalkulus1', 'Kalkulus2', 'Matematika_Diskrit']),
            'nama_hari' => $this->faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis']),
        ];
    }
}
