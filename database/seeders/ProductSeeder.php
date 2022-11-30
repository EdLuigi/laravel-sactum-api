<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'iPhone 12',
            'slug' => 'iphone-12',
            'description' => 'Smartphone iPhone 12 da Apple',
            'price' => '3500.00'
        ]);

        Product::create([
            'name' => 'Liquidificador Arno',
            'slug' => 'liquidificador-arno',
            'description' => 'Liquidificador eletrodoméstico - Arno',
            'price' => '79.99'
        ]);

        Product::create([
            'name' => 'Geladeira Brastemp',
            'slug' => 'geladeira-brastemp',
            'description' => 'Geladeira eletrodoméstico - Brastemp',
            'price' => '299.00'
        ]);

        Product::create([
            'name' => 'Sofá 4 lugares',
            'slug' => 'sofa-4-lugares',
            'description' => 'Sofá de sala com 4 lugares marrom',
            'price' => '350.00'
        ]);

        Product::create([
            'name' => 'Tablet Samgung 14"',
            'slug' => 'tablet-samsung-14',
            'description' => 'Tablete da marca Samsung de 14 polegadas',
            'price' => '1499.00'
        ]);
    }
}
