<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();
        
        $personal = Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'category_id' => $personal->id,
            'user_id' => $user->id,
            'slug' => 'my-first-post',
            'title' => 'My first post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi a minus quis nihil, libero doloremque ad hic nostrum perferendis!',
            'excerpt' => 'Lorem ipsum dolor'
        ]);
        
        Post::create([
            'category_id' => $family->id,
            'user_id' => $user->id,
            'slug' => 'my-second-post',
            'title' => 'My second post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi a minus quis nihil, libero doloremque ad hic nostrum perferendis!',
            'excerpt' => 'Lorem ipsum dolor'
        ]);
        
        Post::create([
            'category_id' => $work->id,
            'user_id' => $user->id,
            'slug' => 'my-third-post',
            'title' => 'My third post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi a minus quis nihil, libero doloremque ad hic nostrum perferendis!',
            'excerpt' => 'Lorem ipsum dolor'
        ]);
        
    }
}

