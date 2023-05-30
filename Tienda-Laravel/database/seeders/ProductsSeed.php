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
            'img'=>'dbsupermanga.jpg',
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
        DB::table('products')->insert([
            'name'=>'Jojos Phantom Blood',
            'price'=>120,
            'img'=>'jojosphantom.jpg',
            'condition'=>'new',
            'description'=>'Parte 1 de Jojos',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'jojos-phantom-blood',
            'id_category'=>4,
            'id_user'=>1
        ]);
        DB::table('products')->insert([
            'name'=>'Naruto Shippuden',
            'price'=>100,
            'img'=>'narutoh.jpg',
            'condition'=>'new',
            'description'=>'Tomo 65 del manga de Naruto',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'naruto-65',
            'id_category'=>4,
            'id_user'=>1
        ]);
        DB::table('products')->insert([
            'name'=>'Berserk',
            'price'=>110,
            'img'=>'berserk.jpg',
            'condition'=>'new',
            'description'=>'Tomo 21 del manga Berserk',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'berserk',
            'id_category'=>4,
            'id_user'=>1
        ]);
        DB::table('products')->insert([
            'name'=>'The Legend Of Zelda: Twilight Princess',
            'price'=>130,
            'img'=>'zeldatp.jpg',
            'condition'=>'new',
            'description'=>'Manga recopliatorio',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'zelda-twilight-princess',
            'id_category'=>4,
            'id_user'=>1
        ]);
        DB::table('products')->insert([
            'name'=>'Tomo Chan is a Girl!',
            'price'=>120,
            'img'=>'tomochan.jpg',
            'condition'=>'new',
            'description'=>'Tomo 8 del manga Tomo Chan is a Girl',
            'ship'=>false,
            'stock'=>20,
            'size'=>'unitalla',
            'status'=>'disponible',
            'slug'=>'tomo-chan-is-a-girl',
            'id_category'=>4,
            'id_user'=>1
        ]);

    }
}
