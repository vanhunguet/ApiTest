<?php

use Illuminate\Database\Seeder;
use App\Post;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $faker = \Faker\Factory::create();
        for($i = 0 ; $i <= 10; $i++){
            Post::create([
                'title' => $faker -> sentence,
                'body' => $faker -> paragraph,
                'number' => $faker -> randomNumber(2),
            ]);
        }
    }
}
