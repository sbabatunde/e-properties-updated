<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Example array of online animated GIF URLs of people
        $animatedImages = [
            'https://media.giphy.com/media/3o6ZsVv7BGrU1cLl0s/giphy.gif',
            'https://media.giphy.com/media/xUPGcBae8aRbdlYg8Y/giphy.gif',
            'https://media.giphy.com/media/2yUqjGnSMKmN9ZgDTK/giphy.gif',
            'https://media.giphy.com/media/26xBME2M0C1qf3A2k/giphy.gif',
            'https://media.giphy.com/media/l1J9GvG1eX0vWXvH2/giphy.gif',
            'https://media.giphy.com/media/1xZr5DzY7ob2c/giphy.gif',
            'https://media.giphy.com/media/l4FGpQcbk7YO8UHzq/giphy.gif',
            'https://media.giphy.com/media/3o6nV4b7GR5u0uTgS4/giphy.gif',
            // Add more URLs as needed
        ];

        for ($i = 0; $i < 50; $i++) {
            User::create([
                'user_type' => 'service_provider',
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('password'), // Use a hashed password
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'business_name' => $faker->company(),
                'business_image' => $faker->randomElement($animatedImages), // Random animated GIF for business image
                'photo' => $faker->randomElement($animatedImages), // Random animated GIF for profile photo
                'country_code' => $faker->randomNumber(2),
                'phone' => $faker->phoneNumber(),
                'state' => $faker->state(),
                'about_org' => $faker->sentence(),
                'org_service' => $faker->word(),
                'status' => $faker->randomElement(['verified', 'unverified']),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
