<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $path = store_asset('services/gallery', 'gallery.jpg');
            $gallery = [$path, $path, $path, $path];
        return [
            'name' => fake()->word(),
            'video_cover' => store_asset('services/covers', 'cover.png'),
            'avatar' => store_asset('services/avatars', 'avatar.png'),
            'reviews' => fake()->word(),
            'gallery' => fake()->randomElements($gallery),
            'description' => fake()->word(),
        ];
    }
}
