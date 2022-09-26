<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'image' => Str::random(4).'jpg',
            'name' => Str::random(10),
            'description' => Str::random(100),
            'price' => Str::random(8),
            //'password' => Hash::make('password'),
        ]);
    }
}
