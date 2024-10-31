<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\BuildingMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuidingMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $public_ids = [
            'building_materials/tunklln8ypwvxcp58fuf', 
            'building_materials/wnwoj3rdkhve9xn1nmfm', 
            'building_materials/p6codilmvborncjmucez', 
            'building_materials/rlivq0omqztowzhz4op3', 
            'building_materials/ktaszsc2bobyunyrmtcd', 
            'building_materials/sjijuzzlno7t6tsxseod', 
            'building_materials/jn5ker1enwaylv6jaqnl', 
            'building_materials/jgxt3jyf2kuntz9wd5kd', 
            'building_materials/zx56qie9gnkyd4adebwa', 
            'building_materials/a3fvueuhbbsgoifo9ysn', 
            'building_materials/wsc0pmky29mrrmm8jyud', 
            'building_materials/s2eszmqxjsowu2fp8bel', 
            'building_materials/g2zshyb1o2tvwc5y9upg', 
            'building_materials/rla0rgzfcxtzbcxlztfg'
        ];
        
        $materials = [
            [
                'user_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[0],
                'title' => 'Roofing Hammer',
                'type' => 'roofing-hammer',
                'address' => '123 Main Street, Lagos',
                'quantity' => '10',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 5000.00,
                'installment' => 'No',
                'description' => 'A high-quality roofing hammer suitable for all roofing tasks.',
            ],
            [
                'user_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[1],
                'title' => 'Roofing Knife',
                'type' => 'roofing-knife',
                'address' => '456 Industrial Ave, Lagos',
                'quantity' => '15',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 3000.00,
                'installment' => 'No',
                'description' => 'A durable roofing knife designed for precision cutting.',
            ],
            [
                'user_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[2],
                'title' => 'Roofing Pry Bar',
                'type' => 'roofing-pry-bar',
                'address' => '789 Commerce Blvd, Abuja',
                'quantity' => '8',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 4500.00,
                'installment' => 'No',
                'description' => 'A sturdy pry bar ideal for removing old shingles and nails.',
            ],
            [
                'user_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[3],
                'title' => 'Chalk Line',
                'type' => 'chalk-line',
                'address' => '987 Builder\'s Way, Lagos',
                'quantity' => '20',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 1500.00,
                'installment' => 'No',
                'description' => 'A reliable chalk line for accurate marking on surfaces.',
            ],
            [
                'user_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[4],
                'title' => 'Roofing Boots',
                'type' => 'roofing-boots',
                'address' => '123 Main Street, Lagos',
                'quantity' => '12',
                'unit' => 'pairs',
                'denomination' => '₦',
                'price' => 8000.00,
                'installment' => 'No',
                'description' => 'Safety boots designed specifically for roofing work.',
            ],
            [
                'user_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[5],
                'title' => 'Roofing Sealants',
                'type' => 'roofing-sealants',
                'address' => '456 Industrial Ave, Lagos',
                'quantity' => '30',
                'unit' => 'tubes',
                'denomination' => '₦',
                'price' => 2000.00,
                'installment' => 'No',
                'description' => 'High-quality sealants for waterproofing roofs.',
            ],
            [
                'user_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[6],
                'title' => 'Roofing Screws',
                'type' => 'roofing-screws',
                'address' => '789 Commerce Blvd, Abuja',
                'quantity' => '1000',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 0.50,
                'installment' => 'No',
                'description' => 'Durable screws suitable for metal roofing installations.',
            ],
            [
                'user_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[7],
                'title' => 'Flashing',
                'type' => 'flashing',
                'address' => '987 Builder\'s Way, Lagos',
                'quantity' => '50',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 4000.00,
                'installment' => 'No',
                'description' => 'Metal flashing to prevent water penetration at roof joints.',
            ],
            [
                'user_id' => 1,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[8],
                'title' => 'Ladder',
                'type' => 'ladder',
                'address' => '123 Main Street, Lagos',
                'quantity' => '5',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 10000.00,
                'installment' => 'No',
                'description' => 'Aluminum ladder suitable for roofing and other construction tasks.',
            ],
            [
                'user_id' => 2,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[9],
                'title' => 'Plasterboard Support',
                'type' => 'plasterboard-support',
                'address' => '456 Industrial Ave, Lagos',
                'quantity' => '7',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 6000.00,
                'installment' => 'No',
                'description' => 'Support tool for holding plasterboards during installation.',
            ],
            [
                'user_id' => 3,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[10],
                'title' => 'Snips',
                'type' => 'snips',
                'address' => '789 Commerce Blvd, Abuja',
                'quantity' => '20',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 3500.00,
                'installment' => 'No',
                'description' => 'Durable snips for cutting roofing sheets and wires.',
            ],
            [
                'user_id' => 4,
                'thumbnail' => 'https://res.cloudinary.com/dxyhmgqli/image/upload/'.$public_ids[11],
                'title' => 'Measuring Tape',
                'type' => 'measuring-tape',
                'address' => '987 Builder\'s Way, Lagos',
                'quantity' => '50',
                'unit' => 'pieces',
                'denomination' => '₦',
                'price' => 2000.00,
                'installment' => 'No',
                'description' => 'Reliable measuring tape for accurate measurements.',
            ],
        ];
        
        
        foreach ($materials as $material) {
            BuildingMaterial::create($material);
        }
    }
}
