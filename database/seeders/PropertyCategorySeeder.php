<?php

namespace Database\Seeders;

use App\Models\Site\PropertyCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category_name' => 'Commercial',
            ],
            [
              'category_name' => 'Residential',
            ],
            // Add more records as needed
        ];

        // Insert records using raw SQL queries
        foreach ($category as $cat) {
            $catModel = PropertyCategory::create($cat);
            // Generate slug
            $catModel->category_slug = Str::slug($cat['category_name'].'-'.$catModel['id']);
            $catModel->save();
        }

        // DB::table('property_category')->insert($category);
    }
}
