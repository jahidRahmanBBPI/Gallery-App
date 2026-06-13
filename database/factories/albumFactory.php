<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class albumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'album_name' => fake()->words(3, true),
            'album_desc' => fake()->sentence(),
            'album_thumbnail' => 'https://cdn.shopify.com/s/files/1/0782/9346/7416/files/kingfisher-bird_480x480.jpg?v=1702632418',
        ];
    }
}
