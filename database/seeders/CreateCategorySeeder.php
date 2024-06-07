<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CategoryDataBaseSeeder::class);
    }
}
