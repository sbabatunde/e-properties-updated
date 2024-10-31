<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use App\Models\ServiceProvider;
use Illuminate\Database\Seeder;
use App\Models\Site\ServiceType;

class ServiceProviderSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get all service types
        $serviceTypes = ServiceType::all();

        // Get all users who are service providers and ensure they are unique
        $users = User::where('user_type', 'service_provider')->get();

        // Loop through the users to create a service provider for each unique user
        foreach ($users as $user) {
            ServiceProvider::create([
                'user_id' => $user->id, // Unique user ID
                'business_ID' => strtoupper($faker->uuid), // Random UUID for business ID
                'business_name' => $faker->company(),
                'service_type_id' => $serviceTypes->random()->id, // Random service type
            ]);
        }
    }
}

