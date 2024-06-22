<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Admin\BuildingCategory;
use App\Models\Admin\BuildingCategoryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuildingCategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roofing
            $category = BuildingCategory::where('category','Roofing')->first();

            $catType = [
                [
                    'type' => 'Roofing hammer',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Roofing nail gun',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Roofing knife',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Roofing pry bar',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Chalk line',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Roofing safety harness',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Roofing boots',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Roofing sealants',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Roofing screws',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Flashing',
                    'building_category_slug' => $category->slug,
                ], 
                [
                    'type' => 'Ladder',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Nail',
                    'building_category_slug' => $category->slug,
                ],  
                [
                    'type' => 'Roofing wire',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Anticulut',
                    'building_category_slug' => $category->slug,
                ],


                
            
                // Add more records as needed
            ];

            foreach ($catType as $type) {
                $restypeModel = BuildingCategoryType::create($type);
                // Generate slug
                $restypeModel->slug = Str::slug($type['type']);
                $restypeModel->save();
            }
        //Roofing

        // Dry Lining and Platering Begins
            $category = BuildingCategory::where('category','Dry Lining & Plaster')->first();

            $catType = [
                [
                    'type' => 'Stud finder',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Plasterboard support',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Snips',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Drywall plane',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Staple gun',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Trowel',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Skeleton gun',
                    'building_category_slug' => $category->slug,
                ],
            
                // Add more records as needed
            ];

            foreach ($catType as $type) {
                $restypeModel = BuildingCategoryType::create($type);
                // Generate slug
                $restypeModel->slug = Str::slug($type['type']);
                $restypeModel->save();
            }
        // Dry Lining and Platering Ends

        // Timber & Joinery Begins
            $category = BuildingCategory::where('category','Timber & Joinery')->first();

            $catType = [
                [
                    'type' => 'Mallet',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Saw',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Drill',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Workbench',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Screw drivers',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Planes',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Chiesel',
                    'building_category_slug' => $category->slug,
                ],
                
                [
                    'type' => 'Jointer',
                    'building_category_slug' => $category->slug,
                ],
                // Add more records as needed
            ];

            foreach ($catType as $type) {
                $restypeModel = BuildingCategoryType::create($type);
                // Generate slug
                $restypeModel->slug = Str::slug($type['type']);
                $restypeModel->save();
            }
        // Timber & Joinery Ends

        // Insulation Begins
            $category = BuildingCategory::where('category','Insulation')->first();

            $catType = [
                [
                    'type' => 'Measuring tape',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Adhesive',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Polyurethane foam',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Insulation support materials',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Utility knife',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Personal protective equipment',
                    'building_category_slug' => $category->slug,
                ],
                // Add more records as needed
            ];

            foreach ($catType as $type) {
                $restypeModel = BuildingCategoryType::create($type);
                // Generate slug
                $restypeModel->slug = Str::slug($type['type']);
                $restypeModel->save();
            }
        // Insulation Ends

        // Garden & Outdoor Begins
            $category = BuildingCategory::where('category','Garden & Outdoor')->first();

            $catType = [
                [
                    'type' => 'Gloves',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Prunning shears',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Loppers',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Garden fork',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Spade',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Rake',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Hoe',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Watering can',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Wheelbarrow',
                    'building_category_slug' => $category->slug,
                ],
                // Add more records as needed
            ];

            foreach ($catType as $type) {
                $restypeModel = BuildingCategoryType::create($type);
                // Generate slug
                $restypeModel->slug = Str::slug($type['type']);
                $restypeModel->save();
            }
        // Garden & Outdoor Ends

        // Door Begins
            $category = BuildingCategory::where('category','Door')->first();

            $catType = [
                [
                    'type' => 'Saw',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Router',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Router table',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Clamps',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Doweling jig',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Drill press',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Clamping square',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Watering can',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Orbital sander',
                    'building_category_slug' => $category->slug,
                ],
                // Add more records as needed
            ];

            foreach ($catType as $type) {
                $restypeModel = BuildingCategoryType::create($type);
                // Generate slug
                $restypeModel->slug = Str::slug($type['type']);
                $restypeModel->save();
            }
        // Door Ends

        // Tools & Machineries Begins
            $category = BuildingCategory::where('category','Tools & Machineries')->first();

            $catType = [
                [
                    'type' => 'Bulldozer',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Excavators',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Loaders',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Mixers',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Cranes',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Compactors',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Gloves',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Graders',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Measuring box',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Backhoe',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Bolster',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Boning rod',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Bump cutter',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Digging bar',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Forklift',
                    'building_category_slug' => $category->slug,
                ],
                [
                    'type' => 'Plumb Bob',
                    'building_category_slug' => $category->slug,
                ],
                // Add more records as needed
            ];

            foreach ($catType as $type) {
                $restypeModel = BuildingCategoryType::create($type);
                // Generate slug
                $restypeModel->slug = Str::slug($type['type']);
                $restypeModel->save();
            }
        // Tools & Machineries Ends
    }
}
