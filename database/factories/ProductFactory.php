<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;


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
            'title'=>ucfirst($this->faker->words(2, true)),
            'price'=>$this->faker->numberBetween(1000, 100000),
            'brand_id'=>Brand::query()->inRandomOrder()->value('id'),
        ];
    }
}
