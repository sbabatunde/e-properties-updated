<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Property;
use App\Models\PropertyAmenities;
use App\Models\Auction;
use App\Models\PropertyDeals;
use App\Models\PropertyPayment;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Define paths for thumbnails and amenities
        $thumbnailLinks = [];
        for ($i = 1; $i <= 16; $i++) {
            $thumbnailLinks[] = asset("assets/images/houses/residential/house{$i}.jpg");
        }
        
        $amenityLinks = [];
        for ($i = 1; $i <= 23; $i++) {
            $amenityLinks[] = asset("assets/images/houses/amenities/amenity{$i}.jpg");
        }
        
        DB::transaction(function () use ($faker, $thumbnailLinks, $amenityLinks) {
            for ($i = 1; $i <= 20; $i++) {
                // Create property
                $property = Property::create([
                    'agent_id' => 1, // Assuming agent with ID 1 exists
                    'title' => $faker->sentence(3),
                    'property_code' => 'EP' . (int) substr($faker->uuid, 0, 8),
                    'status' => $faker->randomElement(['Available', 'Sold']),
                    'landlord' => $faker->name,
                    'furnishing' => $faker->randomElement(['Furnished', 'Semi-Furnished', 'Unfurnished']),
                    'type_id' => $faker->numberBetween(1, 5), // Assuming 5 types exist
                    'bathrooms' => $faker->numberBetween(1, 4),
                    'bedrooms' => $faker->numberBetween(1, 5),
                    'toilets' => $faker->numberBetween(1, 4),
                    'auction' => $i <= 4 ? 'Yes' : 'No',
                    'deal' => $i > 4 && $i <= 7 ? 'Yes' : 'No',
                    'description' => $faker->paragraph,
                    'state' => $faker->state,
                    'localty' => $faker->city,
                    'area' => $faker->citySuffix,
                    'street' => $faker->streetAddress,
                    'installment' => $faker->randomElement(['Yes', 'No']),
                    'C_of_O' => $faker->randomElement(['Yes', 'No']),
                    'survey_plan' => $faker->randomElement(['Yes', 'No']),
                    'deed_of_ass' => $faker->randomElement(['Yes', 'No']),
                    'grant_of_prob' => $faker->randomElement(['Yes', 'No']),
                    'deed_of_mort' => $faker->randomElement(['Yes', 'No']),
                    'deed_of_gift' => $faker->randomElement(['Yes', 'No']),
                    'property_doc' => $faker->randomElement(['Yes', 'No']),
                    'land_receipt' => $faker->randomElement(['Yes', 'No']),
                    'thumbnail' => $thumbnailLinks[$i % count($thumbnailLinks)],
                ]);
        
                // Add amenities
                $selectedAmenities = $faker->randomElements($amenityLinks, 4);
                foreach ($selectedAmenities as $link) {
                    PropertyAmenities::create([
                        'property_id' => $property->id,
                        'amenities' => $link,
                    ]);
                }
        
                // Add auction details
                if ($property->auction === 'Yes') {
                    Auction::create([
                        'property_id' => $property->id,
                        'start_date' => $faker->date(),
                        'start_time' => $faker->time(),
                        'end_date' => $faker->date(),
                        'end_time' => $faker->time(),
                        'starting_price' => $faker->numberBetween(100000, 1000000),
                        'denomination' => '₦',
                        'append' => $faker->randomElement(['Monthly', 'Annually']),
                    ]);
                }
        
                // Add deal details
                if ($property->deal === 'Yes') {
                    PropertyDeals::create([
                        'property_id' => $property->id,
                        'start_date' => $faker->date(),
                        'start_time' => $faker->time(),
                        'end_date' => $faker->date(),
                        'end_time' => $faker->time(),
                        'deal_price' => $faker->numberBetween(100000, 1000000),
                        'denomination' => '₦',
                        'append' => $faker->randomElement(['Monthly', 'Annually']),
                    ]);
                }
        
                // Add property payment
                PropertyPayment::create([
                    'property_id' => $property->id,
                    'sequence' => $faker->randomElement(['Single', 'Installments']),
                    'initial_pay' => $faker->numberBetween(50000, 200000),
                    'subsequent_pay' => $faker->numberBetween(10000, 50000),
                    'initial_denomination' => '₦',
                    'subsequent_denomination' => '₦',
                    'initial_append' => $faker->randomElement(['Monthly', 'Annually']),
                    'subsequent_append' => $faker->randomElement(['Monthly', 'Annually']),
                ]);
            }
        });
    }
  
}