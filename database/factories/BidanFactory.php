<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bidan>
 */
class BidanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bidan_name' => $this->faker->name(),
            'bidan_phone' => $this->faker->unique()->phoneNumber(),
            'bidan_email' => $this->faker->unique()->safeEmail(),
            'bidan_password' => $this->faker->word,
            'photo' => $this->faker->word,
            'role' => $this->faker->word,
            'address' => $this->faker->address(),
            'sip' => $this->faker->word,
            'id_ihs' => $this->faker->word,
            'nik' => $this->faker->unique()->numerify('################'),
            'birth_date' => $this->faker->date(),
        ];
    }
}
