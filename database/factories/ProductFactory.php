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
    public function definition()
    {
        return [
            'category_id' => 7,
            'subcategory_id' => 8,
            'product_name' => $this->faker->name(),
            'product_slug' => $this->faker->slug(),
            'product_qty' => $this->faker->numberBetween($min = 10, $max = 999),
            'product_size' => $this->faker->text('Small,Medium,Large'),
            'product_color' => $this->faker->text('White,Black,Red'),
            'selling_price' => $this->faker->numberBetween($min = 10, $max = 299),
            'description' => $this->faker->sentence(),
            'product_thumbnail' => $this->faker->text('jacket.png'),
            'new_arrivals' => $this->faker->numberBetween($min = 0, $max = 1),
            'featured' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
