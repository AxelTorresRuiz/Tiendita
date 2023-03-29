<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Usuario 1',
            'email'=>'u1@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>'6361317374',
            'img'=>'default.jpg',
            'address'=>'calle pino 8'
        ]);
        DB::table('users')->insert([
            'name'=>'Usuario 2',
            'email'=>'u2@gmail.com',
            'password'=>Hash::make('123'),
            'phone'=>'6361317375',
            'img'=>'default.jpg',
            'address'=>'calle pino 9'
        ]);
    }
}
