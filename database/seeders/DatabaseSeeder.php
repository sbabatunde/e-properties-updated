<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Auction;
use App\Models\Property;
use App\Models\PropertyDeals;
use App\Models\PropertyPayment;
use Database\Factories\DealsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $admin = \App\Models\User::create([
            'firstname' => 'Essential',
            'lastname'=>'Admin',
            'user_type' =>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
        ]);

        \App\Models\Admin::create([
            'user_id' =>$admin->id,
            'username' => 'essential_admin',
        ]);
       
        //My Seeders
        // $this->call(PropertyCategorySeeder::class);
        // $this->call(PropertyTypeSeeder::class);
        // $this->call(BuildingCategorySeeder::class);
        // $this->call(BuildingCategoryTypeSeeder::class);
        // $this->call(ServiceCategorySeeder::class);
        // $this->call(ServiceTypeSeeder::class);

        // My Factories
        // Property::factory()->count(10)->create();
        // Auction::factory()->count(10)->create();
        // PropertyDeals::factory()->count(4)->create();s
        // PropertyPayment::factory()->count(10)->create();
    }
}
