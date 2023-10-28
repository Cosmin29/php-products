<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->insert([
            ['name' => 'Electronics'],
            ['name' => 'Books'],
            ['name' => 'Fashion'],
            ['name' => 'Home & Garden'],
            ['name' => 'Toys & Games'],
            ['name' => 'Sports & Outdoors'],
            ['name' => 'Tools & Home Improvement'],
            ['name' => 'Automotive'],
            ['name' => 'Health & Personal Care'],
            ['name' => 'Beauty']
        ]);
    }
}
