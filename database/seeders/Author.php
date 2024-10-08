<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Author extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake  = "Faker\Factory::create()";

        DB::table('authors')->insert([
            'user_id' => 9,
            'name' => 'Huy Hoang Tran',
            'email' => 'mancha2007@mail.com',
        ]);
    }
}
