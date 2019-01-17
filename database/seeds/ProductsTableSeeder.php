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
        \Tenant::setTenant(\App\User::find(1));
        $categories = \App\Category::all();
        factory(\App\Product::class, 100)
            ->make()
            ->each(function ($product) use($categories){
                $product->category_id = $categories->random()->id;
                $product->save();
            });

        \Tenant::setTenant(\App\User::find(2));
        $categories = \App\Category::all();
        factory(\App\Product::class, 100)
            ->make()
            ->each(function ($product) use($categories){
                $product->category_id = $categories->random()->id;
                $product->save();
            });
    }
}
