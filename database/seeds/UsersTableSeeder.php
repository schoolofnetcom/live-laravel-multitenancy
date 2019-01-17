<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 1)->create([
            'email' => 'client1@user.com'
        ]);
        factory(\App\User::class, 1)->create([
            'email' => 'client2@user.com'
        ]);
    }
}
