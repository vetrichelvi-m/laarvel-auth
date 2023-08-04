<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class RoleSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'admin',
            'created_at' => now(),
            'updated_at' => now()],
            ['name' => 'customer',
            'created_at' => now(),
            'updated_at' => now()],
        ]);
    }
}
