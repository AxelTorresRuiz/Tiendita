<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorysSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert(['name'=>'Pantalones']);
        DB::table('categorys')->insert(['name'=>'Zapatos']);
        DB::table('categorys')->insert(['name'=>'Blusas']);
        DB::table('categorys')->insert(['name'=>'Gorras']);
        DB::table('categorys')->insert(['name'=>'Tenis']);
    }
}
