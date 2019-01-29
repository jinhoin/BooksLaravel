<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if (config('database.default') !== 'sqllite') {
            # code...
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }
        //sql lite를 제외하고 외래키를 0fh 마추고

        // Model::unguard();
        App\User::truncate();
        // increament id 값 초기화
        // 빠른제거

        $this->call(UserTableSeeder::class);

        App\Article::truncate();
        
        $this->call(ArticlesTableSeeder::class);
        //Model::reguard();

        if (config('database.default') !== 'sqllite') {
            # code...
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }

        // 명령어
        // php artisan db:seed
        // php artisan migrate:refresh --seed
        

    
    }
}
