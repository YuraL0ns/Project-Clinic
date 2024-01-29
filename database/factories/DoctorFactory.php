<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_alias' => $this->faker->slug(3),
            'first_name' => $this->faker->firstName('man'),
            'second_name' => $this->faker->lastName('man'),
            'last_name' => $this->faker->lastName('man'),
            'age' => $this->faker->numberBetween(1992, 2024),
            'work_stage_year' => $this->faker->numberBetween(4, 25),
            'work_start_year' => $this->faker->numberBetween(2012, 2024),
            'doctor_img' => $this->faker->imageUrl(500, 500, 'car', false, false, false, 'jpg')
        ];
    }
}
