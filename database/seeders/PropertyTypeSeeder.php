<?php

namespace Database\Seeders;

use App\Models\Site\PropertyCategory;
use App\Models\Site\PropertyType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $residential = PropertyCategory::where('category_name','Residential')->first();

        $resType = [
            [
                'property_type' => 'Apartment',
                'image_path' => 'assets/frontend/property/type/apartment.png',
                'category_slug' => $residential->category_slug,
            ],
            [
                'property_type' => 'Bungalow',
                'image_path' => 'assets/frontend/property/type/bungalow.png',
                'category_slug' => $residential->category_slug,
            ],
            [
                'property_type' => 'Detached',
                'image_path' => 'assets/frontend/property/type/detached.png',
                'category_slug' => $residential->category_slug,
            ],
            [
                'property_type' => 'Mini Duplex',
                'image_path' => 'assets/frontend/property/type/mini_duplex.png',
                'category_slug' => $residential->category_slug,
            ],

            [
                'property_type' => 'Single Rooms',
                'image_path' => 'assets/frontend/property/type/single_rooms.png',
                'category_slug' => $residential->category_slug,
            ],

            [
                'property_type' => 'Penthouse',
                'image_path' => 'assets/frontend/property/type/penthouse.png',
                'category_slug' => $residential->category_slug,
            ],
            [
                'property_type' => 'Terraced',
                'image_path' => 'assets/frontend/property/type/terraced.png',
                'category_slug' => $residential->category_slug,
            ],
           
            // Add more records as needed
        ];

        foreach ($resType as $type) {
            $restypeModel = PropertyType::create($type);
            // Generate slug
            $restypeModel->property_type_slug = Str::slug($type['property_type']);
            $restypeModel->save();
        }


        $commercial = PropertyCategory::where('category_name','Commercial')->first();

        $commType = [
            [
                'property_type' => 'Office Space',
                'image_path' => 'assets/frontend/property/type/office_space.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Church',
                'image_path' => 'assets/frontend/property/type/church.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Guest House',
                'image_path' => 'assets/frontend/property/type/guest_house.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Farm Land',
                'image_path' => 'assets/frontend/property/type/farm_land.png',
                'category_slug' => $commercial->category_slug,
            ],

            [
                'property_type' => 'Malls',
                'image_path' => 'assets/frontend/property/type/malls.png',
                'category_slug' => $commercial->category_slug,
            ],

            [
                'property_type' => 'Hotels',
                'image_path' => 'assets/frontend/property/type/hotels.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Parking Space ',
                'image_path' => 'assets/frontend/property/type/parking_spaces.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Shops',
                'image_path' => 'assets/frontend/property/type/shops.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Event Halls',
                'image_path' => 'assets/frontend/property/type/event_halls.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Town House',
                'image_path' => 'assets/frontend/property/type/town_house.png',
                'category_slug' => $commercial->category_slug,
            ],
            [
                'property_type' => 'Ware House',
                'image_path' => 'assets/frontend/property/type/ware_house.png',
                'category_slug' => $commercial->category_slug,
            ],
            // Add more records as needed
        ];

        foreach ($commType as $type) {
            $commTypeModel = PropertyType::create($type);
            // Generate slug
            $commTypeModel->property_type_slug = Str::slug($type['property_type']);
            $commTypeModel->save();
        }
        // // Insert records using raw SQL queries
        // DB::table('property_category')->insert($type);
    }
}
