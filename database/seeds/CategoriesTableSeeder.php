<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class,200)->create();
//        \Tenant::setTenant(\App\User::find(1));
//        factory(\App\Category::class,100)->create();
//        \Tenant::setTenant(\App\User::find(2));
//        factory(\App\Category::class,100)->create();
    }
}
