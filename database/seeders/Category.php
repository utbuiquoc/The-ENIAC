<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake  = "Faker\Factory::create()";

        DB::table('categories')->insert([
            'user_id' => 1,
            'name' => 'The ENIAC',
            'slug' => 'the-eniac',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et elementum tellus. Nulla.',
            'is_visible' => true,
        ]);
    }
}
