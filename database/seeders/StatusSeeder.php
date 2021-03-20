<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('status')->insert([
            ['name'  => 'New Order', 'description'  => 'Customer. New order/ renew'],
            ['name'  => 'Luxe.Confirm Order', 'description'  => 'Luxe.Order confirm'],
            ['name'  => 'Luxe.Order delivery', 'description'  => 'Luxe.Order deliver'],
            ['name'  => 'Customer. Order delivery confirm', 'description'  => 'Customer. Order delivery confirmation'],
            ['name'  => 'Customer. Order wash', 'description'  => 'Customer. Order wash'],

            ['name'  => 'Luxe. Collection date&time', 'description'  => 'Luxe. Set up estimated date & time of collection'],
            ['name'  => 'Luxe. Collect& Check', 'description'  => 'Luxe/transport. Collect&check'],
            ['name'  => 'Luxe. Prewash check', 'description'  => 'Luxe. Pre wash checks'],
            ['name'  => 'Customer. Prewash check accept', 'description'  => 'Customer. Pre wash check accept'],
            ['name'  => 'Luxe.Return date&time', 'description'  => 'Luxe. Return. Set up estimated date and time of return'],

        ]);
    }
}
