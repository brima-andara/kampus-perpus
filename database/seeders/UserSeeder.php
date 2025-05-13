<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name'=>'rei',
                'email'=>'rei@gmail.com',
                'password'=>Hash::make('12345'),
                'role'=>'admin',

            ],
            [
                'name'=>'reauai',
                'email'=>'reuai@gmail.com',
                'password'=>Hash::make('1234ua5'),
                'role'=>'admin',

            ]
        ]);
    }
}
