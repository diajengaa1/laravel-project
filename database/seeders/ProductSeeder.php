<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code'=>'123ff',
            'name'=>'Teh Pucuk',
            'price'=>3000
        ]);
        
        Product::create([
            'code'=>'223r',
            'name'=>'Sari Gandum',
            'price'=>2000
        ]);
        
        Product::create([
            'code'=>'345t',
            'name'=>'Beng-Beng',
            'price'=>1000
        ]);
        
        Product::create([
            'code'=>'456f',
            'name'=>'Wafellow',
            'price'=>4000
        ]);
        
        Product::create([
            'code'=>'5678f',
            'name'=>'Mi Sedap',
            'price'=>5000
        ]);
    }
}
