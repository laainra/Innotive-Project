<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::create([
        //     'name' => 'Technology',
        //     'slug' => 'technology',
        // ]);

        // Category::create([
        //     'name' => 'Craft',
        //     'slug' => 'craft',
        // ]);
        
        Category::create([
            'name' => 'Art',
            'slug' => 'art',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
    }
}
