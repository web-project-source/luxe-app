<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Nicolae Bulat',
            'email'    => 'nicolae.bulat@gmail.com',
            'password'   =>  Hash::make('secret'),
            'remember_token' =>  Str::random(10),
            'role_id'=> 1
        ]);
    }
}
