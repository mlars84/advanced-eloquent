<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class CommentsTableSeeder extends Seeder 
{
    public function run()
    {
        TestDummy::times(50)->create('App\Comment');
    }
}