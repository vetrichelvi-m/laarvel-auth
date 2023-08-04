<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            ['name' => 'Womens',
            'desc' => 'womens',
            'created_at' => now(),
             'updated_at' => now()],

            ['name' => 'Mens',
             'desc' => 'mens',
             'created_at' => now(),
             'updated_at' => now()],
            ['name' => 'Kids',
             'desc' => 'kids',
             'created_at' => now(),
             'updated_at' => now()],
            ['name' => 'Home Goods',
            'desc' => 'homegoods',
            'created_at' => now(),
            'updated_at' => now()],
        ]);

    }
}
