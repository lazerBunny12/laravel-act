<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Product::create([
        
            'name'=>'cabbage',
            'unit_price'=>100,
            'unit'=>'kg',
            'description'=>'Fresh from Baguio',
            'category'=>'vegetable'
       ]); 
       \App\Models\Product::create([
            'name'=>'Bangus',
            'unit_price'=>150,
            'unit'=>'kg',
            'description'=>'Fresh from Pangasinan',
            'category'=>'fish'
        ]); 
        \App\Models\Product::create([
            'name'=>'chicken',
            'unit_price'=>200,
            'unit'=>'kg',
            'description'=>'Fresh from La Union',
            'category'=>'meat'
        ]); 
        \App\Models\Product::create([
            'name'=>'Hotdog',
            'unit_price'=>60,
            'unit'=>'kg',
            'description'=>'Fresh from Bacnotan',
            'category'=>'frozen food'
        ]); 
  
        
    }
}
