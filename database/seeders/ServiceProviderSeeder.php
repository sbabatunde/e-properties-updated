<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Site\ServiceType;
use App\Models\User; // To associate with the user
use App\Models\ServiceProvider; // Adjust based on your actual model namespace

class ServiceProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all service types
        $serviceTypes = ServiceType::all();

        for ($i = 0; $i < 50; $i++) {
            // Randomly pick a user who is a service provider
            $user = User::where('user_type', 'service_provider')->inRandomOrder()->first();

            // Create a service provider
            ServiceProvider::create([
                'user_id' => $user->id,
                'business_ID' => strtoupper($faker->uuid), // Random UUID for business ID
                'business_name' => $faker->company(),
                'service_type_id' => $serviceTypes->random()->id, // Random service type
            ]);
        }
    }
}
