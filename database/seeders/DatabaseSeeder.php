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
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        Post::factory(5)->create();

        //$user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Lorem Ipsum volor something',
        //     'body' => 'lorem body'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'Lorem Ipsum volor something second',
        //     'body' => 'lorem body second'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'Lorem Ipsum volor something second',
        //     'body' => 'lorem body second'
        // ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
