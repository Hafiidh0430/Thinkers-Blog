<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category' => 'Technology',
            ],
            [
                'category' => 'Self Development',
            ],
            [
                'category' => 'Tips & Tricks',
            ],
            [
                'category' => 'Beauty',
            ],
            [
                'category' => 'Family',
            ],
            [
                'category' => 'Religius',
            ],
        ];

       foreach ($category as $categories) {
        DB::table('category')->insert($categories);
       }
    }
}
