<?php

use Illuminate\Database\Seeder;
use App\Post;

class SeedTablePosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        factory('App\Post', 15)->create();
    }
}
