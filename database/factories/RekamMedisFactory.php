<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'diagnosa' => $this->faker->word,
            'tekanan_darah' => $this->faker->word,
            'nafas' => $this->faker->word,
            'nadi' => $this->faker->word,
            'suhu' => $this->faker->word,
            'tinggi_badan' => $this->faker->word,
            'berat_badan' => $this->faker->word,
        ];
    }
}
