<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('flightxyz');

        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password,
            'api_token' => Str::random(60),
        ]);

        // And now let's generate a few dozen users for our app:
            for($i = 1; $i <= 10; $i++){
                DB::table('users')->insert([
                    'name'=> Str::random(15),
                    'email' => Str::random(15).'@gmail.com',
                    'password' => $password,
                    'api_token' => Str::random(60),
                ]);
            }
    }
}
