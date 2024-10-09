<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake  = "Faker\Factory::create()";
        $limit = 10;

        for ($i = 0; $i < $limit; ++$i)
            DB::table('posts')->insert([
                'author_id' => 1,
                'title' => Str::random(10),
                'slug' => Str::random(10),
                'content' => Str::random(30),
                'banner' => "https://picsum.photos/seed/picsum/1280/720",
            ]);
    }
}