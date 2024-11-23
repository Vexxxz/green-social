<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserComment;
use App\Models\UserPost;
use Database\Factories\UserPostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // $this->call(UserPostsSeeder::class);

        UserPost::factory()->has(UserComment::factory()->count(5), 'comments')->create();
        // $post = UserPost::factory()->create();

        // $comments = UserComment::factory()->count(5)->create();
        // UserPost::factory()->count(5)->create();
    }
}
