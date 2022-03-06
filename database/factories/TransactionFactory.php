<?php

namespace Database\Factories;

use App\Models\Buyer;
use App\Models\Product;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // obtiene todos los sellers (Los seller en realidad serian users que tienen una relacion con producto)
        // que tienen por lo menos un producto
        $vendedor = Seller::has('products')->get()->random();

        // Obtenemos todos los users (posibles compradores) y nos aseguramos que no sea el mismo vendedor anterior
        $comprador = User::all()->except($vendedor->id)->random();

        return [
            'quantity' => $this->faker->numberBetween(1, 3),
            'buyer_id' => $comprador->id,
            'product_id' => $vendedor->products->random()->id,
        ];
    }
}
