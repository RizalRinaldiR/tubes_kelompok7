<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $branches = [
            'Jakarta', 'Surabaya', 'Bandung', 'Medan', 'Makassar',
        ];

        if (count($branches) === 0) {
            throw new \Exception("All branch names have been used!");
        }

        // Ambil nama cabang pertama, lalu hapus dari array
        $name = array_shift($branches);

        return [
            'name' => $name,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
