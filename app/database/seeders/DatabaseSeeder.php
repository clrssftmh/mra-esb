<?php

namespace Database\Seeders;

// use App\Models\User;
// use app\Models\Post;
// use app\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \app\Models\Post::factory(10)->create();
        \app\Models\Category::factory(5)->create(); //5 fake categories
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
