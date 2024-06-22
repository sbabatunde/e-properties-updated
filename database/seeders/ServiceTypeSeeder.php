<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Site\ServiceType;
use App\Models\Site\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Maintenance Begins
            $category = ServiceCategory::where('category','Maintenance')->first();

            $catservice = [
                [
                    'service' => 'AC Repairs',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Electricians',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Painters',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Carpenters',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Plumbers',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Welders',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Cleaners',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Aluminium Repairs',
                    'service_category_slug' => $category->slug,
                ],
            ];

            foreach ($catservice as $service) {
                $serviceModel = ServiceType::create($service);
                // Generate slug
                $serviceModel->slug = Str::slug($service['service']);
                $serviceModel->save();
            }
        //Maintenance ends

        //Building Development Begins
            $category = ServiceCategory::where('category','Building Development')->first();

            $catservice = [
                [
                    'service' => 'Real Estate Developers',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Real Estate Investors',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Land Use Planners',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Real Estate Economists',
                    'service_category_slug' => $category->slug,
                ],
                
                [
                    'service' => 'Home Inspectors',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Environmental Consultants',
                    'service_category_slug' => $category->slug,
                ],
            ];

            foreach ($catservice as $service) {
                $serviceModel = ServiceType::create($service);
                // Generate slug
                $serviceModel->slug = Str::slug($service['service']);
                $serviceModel->save();
            }
        //Building Development ends

        //Legal Begins
            $category = ServiceCategory::where('category','Legal')->first();

            $catservice = [
                [
                    'service' => 'Real Estate Attorneys',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Property Tax Consultants',
                    'service_category_slug' => $category->slug,
                ],
            ];

            foreach ($catservice as $service) {
                $serviceModel = ServiceType::create($service);
                // Generate slug
                $serviceModel->slug = Str::slug($service['service']);
                $serviceModel->save();
            }
        //Legal ends

        //Property Begins
            $category = ServiceCategory::where('category','Property')->first();

            $catservice = [
                [
                    'service' => 'Real Estate Agents',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Real Estate Brokers',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Property Managers',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Real Estate Appraisers',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Mortgage Brokers',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Residential Estate Agents',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Commercial Estate Agents',
                    'service_category_slug' => $category->slug,
                ],
                [
                    'service' => 'Real Estate Investment Analyser',
                    'service_category_slug' => $category->slug,
                ],
            ];

            foreach ($catservice as $service) {
                $serviceModel = ServiceType::create($service);
                // Generate slug
                $serviceModel->slug = Str::slug($service['service']);
                $serviceModel->save();
            }
        //Property ends

    }
}
