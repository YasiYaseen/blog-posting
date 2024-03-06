<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_posts')->insert([
            [
                'user_id' => 1,
                'title' => 'First Post',
                'description' => 'This is the description for the first post.',
            ],
            [
                'user_id' => 1,
                'title' => 'Second Post',
                'description' => 'This is the description for the second post.',
            ],
        ]);

    }
}
