<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
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
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(1),
            'quantity' => $disponible = $this->faker->numberBetween(0, 50),
            'status' => $disponible == 0 ? Product::PRODUCTO_NO_DISPINIBLE : Product::PRODUCTO_DISPINIBLE,
            'image' => $this->faker->imageUrl(360, 360, 'products', true),
            'seller_id' => User::all()->random()->id,
        ];
    }
}
