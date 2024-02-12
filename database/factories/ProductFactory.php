<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $symboles = ['gallery.jpg', 'gallery.jpg', 'gallery.jpg', 'gallery.jpg'];

        return [
            'name' => fake()->word(),
            'price' => fake()->numberBetween(10,100),
            'desc' => fake()->numberBetween(1,5),
            'image' => 'avatar.png',
            'image_cover' => 'cover.png',
            'details' =>fake()->randomElements($symboles),
            'category_id' => fake()->numberBetween(1,10),
        ];
    }
}
