<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //protected $model = Product::class;    incorrect one
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->text(200),
            'product_type' => $this->faker->text(200),
            'description' => $this->faker->text(200),
            'stock' => $this->faker->text(50),
            'price' => $this->faker->text(50)
        ];
    }
}
