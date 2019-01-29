<?php

use Illuminate\Database\Seeder;
use Illuminate\Validation\Factory;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = App\User::all();
        $users->each(function ($users){
           $users-> articles()->save(
                factory(App\Article::class)->make()
            );  
        });

    }
}
