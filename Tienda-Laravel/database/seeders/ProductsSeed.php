<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Evangelion',
            'price'=>100,
            'img'=>'evangelionmanga.jpg',
            'condition'=>'Nuevo',
            'description'=>'Tomo uno de el manga de Evangelion',
            'ship'=>true,
            'stock'=>8,
            'size'=>'5',
            'status'=>'disponible',
            'slug'=>'evangelion-manga',
            'id_category'=>1,
            'id_user'=>2
        ]);
        DB::table('products')->insert([
            'name'=>'Tasogare Otome X Amnesia',
            'price'=>100,
            'img'=>'toxatom3.jpg',
            'condition'=>'new',
            'description'=>'Tomo 3 de Tasogare Otome x Amnesia',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'tasogare-otome-x-amnesia-manga',
            'id_category'=>4,
            'id_user'=>1
        ]);
        DB::table('products')->insert([
            'name'=>'Dragon Ball Super',
            'price'=>100,
            'img'=>'default.jpeg',
            'condition'=>'new',
            'description'=>'Manga de padre ball',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'dragon-ball-super-manga',
            'id_category'=>4,
            'id_user'=>1
        ]);
    }
}
