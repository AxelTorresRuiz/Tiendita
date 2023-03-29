<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeed::class);
        $this->call(CategorysSeed::class);
        $this->call(ProductsSeed::class);
        $this->call(ProductmediasSeed::class);
        $this->call(LikesSeed::class);
    }
}
