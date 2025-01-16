<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_name' => $this->faker->name(),
            'patient_nik' => $this->faker->unique()->numerify('################'),
            'patient_kk' => $this->faker->unique()->numerify('################'),
            'patient_phone' => $this->faker->unique()->phoneNumber(),
            'patient_email' => $this->faker->unique()->safeEmail(),
            'birth_date' => $this->faker->date(),
            'address_line' => $this->faker->address(),
        ];
    }
}
