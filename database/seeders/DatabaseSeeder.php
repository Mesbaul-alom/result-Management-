<?php

namespace Database\Seeders;

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

     DB::table('users')->insert(
         [
            'username' =>mesba,
            'is_active' => "1",
            'role'=>"1",
            'email' => "mesba@gmail.com",
           
            'password' => '123456', // password
            // 'remember_token' => Str::random(10)
         ]
     )

        //  \App\Models\User::factory(10)->create();
    }
}
