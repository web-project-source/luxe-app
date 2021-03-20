<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  DB::table('products')->insert([
      ['name' => 'duvet cover',       
      'price' => 1.95,
      'rejectFee' => 7.80],
      ['name' => 'duvet',       
      'price' => 4.64,
      'rejectFee' => 18.54],
       ['name' => 'pillow',       
      'price' => 1.85,
      'rejectFee' => 7.38],
       ['name' => 'table linen',       
      'price' => 1.79,
      'rejectFee' => 7.14],
       ['name' => 'fitted sheet',       
      'price' => 2.10,
      'rejectFee' => 8.40],
       ['name' => 'flat sheet',       
      'price' => 2.24,
      'rejectFee' => 8.95],
       ['name' => 'pillowcase',       
      'price' => 0.80,
      'rejectFee' => 3.19],
       ['name' => 'base valance',       
      'price' => 2.69,
      'rejectFee' => 10.74],   
     ]);
    }
}
