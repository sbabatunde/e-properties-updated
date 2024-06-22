<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Admin\BuildingCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuildingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category' => 'Roofing',
            ],
            [
              'category' => 'Dry Lining & Plaster',
            ],
            [
                'category' => 'Timber & Joinery',
            ],
            [
              'category' => 'Insulation',
            ],
            [
                'category' => 'Garden & Outdoor',
              ],
              [
                'category' => 'Door',
              ],
              [
                'category' => 'Tools & Machineries',
              ],
            // Add more records as needed
        ];

        // Insert records using raw Eloquent queries
        foreach ($category as $cat) {
            $catModel = BuildingCategory::create($cat);
            // Generate slug
            $catModel->slug = Str::slug($cat['category']);
            $catModel->save();
        }

        // DB::table('property_category')->insert($category);
    }
}
