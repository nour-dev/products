<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;




/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $symboles = ['gallery.jpg', 'gallery.jpg', 'gallery.jpg', 'gallery.jpg'];
        $features = [
            [
                'title' => fake()->word(),
                'description' => fake()->sentence(),
                'img' => 'feature.jpg'
            ],
            [
                'title' => fake()->word(),
                'description' => fake()->sentence(),
                'img' => 'feature.jpg'
            ],

            [
                'title' => fake()->word(),
                'description' => fake()->sentence(),
                'img' => 'feature.jpg'
            ],

            [
                'title' => fake()->word(),
                'description' => fake()->sentence(),
                'img' => 'feature.jpg'
            ],

            [
                'title' => fake()->word(),
                'description' => fake()->sentence(),
                'img' => 'feature.jpg'
            ],

            [
                'title' => fake()->word(),
                'description' => fake()->sentence(),
                'img' => 'feature.jpg'
            ],
        ];

        return [
            'avatar' => 'avatar.png',
            'cover' => 'cover.png',
            'features' => fake()->randomElements($features),
            'details' => fake()->sentence(),
            'image_symbol' => 'symbol.jpg',
            'gallery' => fake()->randomElements($symboles),
            'description' => fake()->sentence(),
            'offer_title' => fake()->word(),
            'offer_image' => 'image.png',
        ];
    }
}
