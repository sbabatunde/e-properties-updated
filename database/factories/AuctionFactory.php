<?php

namespace Database\Factories;

use App\Models\Auction;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auction>
 */
class AuctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Auction::class;

    public function definition(): array
    {
        $property_id = DB::table('properties')->inRandomOrder()->first()->id;
        $startDate = now();
        $endDate = now()->addDays(90);
        return [
            //
            'property_id' => $property_id,
            'start_date' => $this->faker->dateTimeBetween('-1 month','+1 month')->format('Y-m-d'),
            'start_time' =>$this->faker->time('H:i:s','now'),
            'end_date' => $this->faker->dateTimeBetween('now','+3 month')->format('Y-m-d'),
            'end_time' => $this->faker->time('H:i:s','now'),
            'starting_price'=>$this->faker->randomFloat(200000,5000000),
            'denomination' => fake()->randomElement(['₦','$']),
            'append' => fake()->randomElement(['Monthly','Annually']),
            'created_at' => $this->faker->dateTimeBetween('now','+3 month'),
            'updated_at'=>$this->faker->dateTimeBetween('now','+3 month')
        ];
    }
}
