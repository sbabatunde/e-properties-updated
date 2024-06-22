<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Site\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'category' => 'Maintenance',
            ],
            [
                'category' => 'Building Development',
            ],
            [
                'category' => 'Legal',
            ],
            [
                'category' => 'Property',
            ],
            // Add more records as needed
        ];

        // Insert records using raw Eloquent queries
        foreach ($category as $cat) {
            $catModel = ServiceCategory::create($cat);
            // Generate slug
            $catModel->slug = Str::slug($cat['category']);
            $catModel->save();
        }

        // DB::table('property_category')->insert($category);
    }
}
