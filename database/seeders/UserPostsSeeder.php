<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $currTime = date("Y-m-d H:i:s");

        for ($i = 0; $i<32; $i++){
            DB::table('user_posts')->insert(
                [
                    'message' => $faker->sentence(32),
                    'likes' => 0,
                    'created_at' => $currTime,
                    'updated_at'=> $currTime
                ]
            );
        }
    }
}
