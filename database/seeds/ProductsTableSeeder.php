<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = \App\Category::all();
        factory(\App\Product::class, 200)
            ->make()
            ->each(function ($product) use($categories){
                $product->category_id = $categories->random()->id;
                $product->save();
            });
    }
}
