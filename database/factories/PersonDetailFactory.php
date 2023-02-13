<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone_num' => fake()->unique()->phoneNumber(),
            'address' => fake()->unique()->streetAddress(),
            'avatar' => 'https://picsum.photos/800/600?random=' . fake()->randomNumber(5, true),
        ];
    }
}