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
            'name' => 'Muški',
            'slug'=>'muski'
        ]);
        Category::create([
            'name' => 'Ženski',
            'slug'=>'zenski'
        ]);
        Category::create([
            'name' => 'Dečiji',
            'slug'=>'deciji'
        ]);
    }
}