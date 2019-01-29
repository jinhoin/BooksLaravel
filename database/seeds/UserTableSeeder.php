<?php

use Illuminate\Database\Seeder;
use Illuminate\Validation\Factory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        // App\User::create([
        //     'name' => sprintf('$s$S', str_random(3), str_random(4)),
        //     'email' => str_random(10),
        //     'password' => bcrypt('password')
        //     ]);

        Factory(App\User::class,5)->create();

            // php artisan db:seed --class=UserTableSeeder
    }
}
