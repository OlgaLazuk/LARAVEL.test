<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(100)->create();
        for ($i = 0; $i < 10; $i++) {
            \DB::table('products')->insert([
                'name' => \Str::random(15),
                'price' => rand(0, 100),
                'description' => \Str::random(100)
            ]);
        }

    }
}
