<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name'=>'Womens',
            'sku'=>'womens',
            'quantity'=>'10',
            'description'=>'cloths in various',
            'image'=>'image/download.jpeg',
            'price'=>'200',
            'product_category_id'=>'1',
            'created_at' => now(),
            'updated_at' => now()],
            ['name'=>'Mens',
            'sku'=>'mens',
            'quantity'=>'10',
            'description'=>'cloths in various',
            'image'=>'image/download.jpeg',
            'price'=>'200',
            'product_category_id'=>'2',
            'created_at' => now(),
            'updated_at' => now()],
        ]);
    }
}
