<?php

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
         $this->call(Roles::class);
         $this->call(UserTableSeeder::class);
         $this->call(Categories::class);
         $this->call(Products::class);
    }
}
