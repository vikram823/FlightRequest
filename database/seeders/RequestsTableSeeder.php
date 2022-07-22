<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RequestsTableSeeder extends Seeder
{   
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Array('Emergency Response', 'Surveillance', 'Mapping', 'Other');
        for($i = 1; $i <= 10; $i++){
            DB::table('requests')->insert([
                'user_id' => $i,
                'request_type' => $items[array_rand($items, 1)],
                'location' => Str::random(10),
                'description' => Str::random(20),
                'date_time' => now(),
            ]);
        }
        //
        // for ($i = 0; $i < 50; $i++) {
        //     Request::create([
        //         'user_id' => $faker->numberBetween(1, 50),
        //         'request_type' => $faker->randomElement(['Emergency Response', 'Surveillance', 'Mapping', 'Other']),
        //         'location' => $faker->address,
        //         'description' => $faker->text,
        //         'date_time' => $faker->dateTimeBetween('now', '+1 year'),
        //     ]);
        // }
    }
}
