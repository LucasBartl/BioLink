<?php

namespace Database\Factories;

use App\Models\link;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'link' => fake()->url(),
            'name' => fake()->word()
        ];
    }
}
