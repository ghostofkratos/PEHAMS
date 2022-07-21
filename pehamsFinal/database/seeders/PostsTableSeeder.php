<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $category1 = Category::create([
            'name' => 'News'
        ]);

        $category2 = Category::create([
            'name' => 'Design'
        ]);

        $category3 = Category::create([
            'name' => 'Marketing'
        ]);

        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure rerum excepturi possimus quos totam a aspernatur rem, fugiat nisi ratione itaque aliquid doloribus mollitia corporis tempora numquam illo perferendis odit?',
            'category_id' => $category1->id,
            'image' => 'img/1.jpg'
        ]);

        $post2 = Post::create([
            'title' => 'What is Lorem Ipsum?',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure rerum excepturi possimus quos totam a aspernatur rem, fugiat nisi ratione itaque aliquid doloribus mollitia corporis tempora numquam illo perferendis odit?',
            'category_id' => $category2->id,
            'image' => 'img/2.jpg'
        ]);

        $post3 = Post::create([
            'title' => 'Where can I get some?',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure rerum excepturi possimus quos totam a aspernatur rem, fugiat nisi ratione itaque aliquid doloribus mollitia corporis tempora numquam illo perferendis odit?',
            'category_id' => $category3->id,
            'image' => 'img/3.jpg'
        ]);

        $post4 = Post::create([
            'title' => 'Class aptent taciti sociosqu ad litora torquent',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure rerum excepturi possimus quos totam a aspernatur rem, fugiat nisi ratione itaque aliquid doloribus mollitia corporis tempora numquam illo perferendis odit?',
            'category_id' => $category2->id,
            'image' => 'img/4.jpg'
        ]);

        $tag1 = Tag::create([
            'name' => 'job'
        ]);

        $tag3 = Tag::create([
            'name' => 'record'
        ]);
        
        $tag2 = Tag::create([
            'name' => 'customer'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);

    }
}
