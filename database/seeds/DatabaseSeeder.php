<?php

use Illuminate\Database\Seeder; 
use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // Post::truncate();
        // Comment::truncate();

        $this->call('PostsTableSeeder');
        $this->call('CommentsTableSeeder');
    }
}
