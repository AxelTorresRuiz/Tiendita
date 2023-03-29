<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductmediasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productmedias')->insert([
            'file'=>'foto1.jpg',
            'id_product'=>1
        ]);
        DB::table('productmedias')->insert([
            'file'=>'foto2.jpg',
            'id_product'=>2
        ]);
    }
}
