<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Seiko',
            'slug'=>'seiko'
        ]);
        Brand::create([
            'name' => 'Casio',
            'slug'=>'casio'
        ]);
        Brand::create([
            'name' => 'Fossil',
            'slug'=>'fossil'
        ]);
        Brand::create([
            'name' => 'Swatch',
            'slug'=>'swatch'
        ]);
        Brand::create([
            'name' => 'Tissot',
            'slug'=>'tissot'
        ]);
    }
}