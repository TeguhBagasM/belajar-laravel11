<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'lightcoral',
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
            'color' => 'yellow',
        ]);
        Category::create([
            'name' => 'UI UX Designer',
            'slug' => 'uiux-designer',
            'color' => 'red',
        ]);
    }
}
