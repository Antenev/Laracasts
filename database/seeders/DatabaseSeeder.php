<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run()
    {
        User::truncate();
        Category::truncate();  
        Post::truncate();


        $user = User::factory()->create([
            'name'=> 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);
/*
        $user = User::factory()->create();

        $personal = Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);

        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id'=> $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Donec enim diam vulputate ut pharetra. Vitae justo eget magna fermentum iaculis. Malesuada fames ac turpis egestas. Feugiat vivamus at augue eget arcu. Blandit massa enim nec dui nunc mattis enim ut. Metus dictum at tempor commodo ullamcorper. Sed velit dignissim sodales ut eu sem integer. In eu mi bibendum neque egestas congue. Id nibh tortor id aliquet lectus proin nibh. Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id'=> $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Donec enim diam vulputate ut pharetra. Vitae justo eget magna fermentum iaculis. Malesuada fames ac turpis egestas. Feugiat vivamus at augue eget arcu. Blandit massa enim nec dui nunc mattis enim ut. Metus dictum at tempor commodo ullamcorper. Sed velit dignissim sodales ut eu sem integer. In eu mi bibendum neque egestas congue. Id nibh tortor id aliquet lectus proin nibh. Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id'=> $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Donec enim diam vulputate ut pharetra. Vitae justo eget magna fermentum iaculis. Malesuada fames ac turpis egestas. Feugiat vivamus at augue eget arcu. Blandit massa enim nec dui nunc mattis enim ut. Metus dictum at tempor commodo ullamcorper. Sed velit dignissim sodales ut eu sem integer. In eu mi bibendum neque egestas congue. Id nibh tortor id aliquet lectus proin nibh. Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis./p>'
        ]);*/
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
