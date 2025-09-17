<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
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
		return [
			'name' => fake()->word(),
			'description' => fake()->text(),
			'previewUrl' => 'https://placehold.net/' . rand(1, 10) . '.png',
			'price' => fake()->numberBetween(10000, 100000),
			'releaseYear' => fake()->year(),
			'country' => fake()->country(),
			'category_id' => Category::inRandomOrder()->first(),
		];
	}
}
