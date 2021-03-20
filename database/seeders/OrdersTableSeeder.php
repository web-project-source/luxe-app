<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  DB::table('products')->insert([
      'date' => 06/02/2021,
      'product' => 1,
      'rejectFee' => 8.54    
     ]);
    }
}
