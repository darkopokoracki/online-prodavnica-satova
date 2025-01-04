<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Casio MTP-1374D-1AVDF Classic',
            'price' => 9990,
            'quantity' => 5,
            'slug' => 'da-da-da',
            'category_id'=> 1,
            'brand_id'=> 1,
            'description'=> 'Casio MTP-1374D-1AVDF Classic je elegantan muški sat brenda Casio koji će upotpuniti svaki izgled. Sa mnoštvom funkcija, ovaj sat je savršen izbor za modernog muškarca.'
        ]);
    }
}