<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $usersAmount = 1000;
        $categoriesAmount = 30;
        $productsAmount = 1000;
        $transactionsAmount = 1000;

        User::factory($usersAmount)->create();
        Category::factory($categoriesAmount)->create();
        Product::factory($productsAmount)->create()->each(function ($product) {
            $categories = Category::all()->random(mt_rand(1, 5))->pluck('id');
            $product->categories()->attach($categories);
        });
        Transaction::factory($transactionsAmount)->create();

        // $this->call([
        //     // UserSeeder::class,
        // ]);
    }
}
