<?php

namespace Database\Factories;

use App\Models\PropertyPayment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropertyPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PropertyPayment::class;

    public function definition(): array
    {
        $property_id = DB::table('properties')->inRandomOrder()->first()->id;
        $startDate = now();
        $endDate = now()->addDays(90);
        return [
            //
            'property_id' => $property_id,
            'sequence' => fake()->randomElement(['Monthly','Annually']),
            'initial_pay'=>$this->faker->randomFloat(200000,5000000),
            'subsequent_pay'=>$this->faker->randomFloat(200000,5000000),
            'initial_denomiation' => fake()->randomElement(['₦','$']),
            'subsequent_denomination' => fake()->randomElement(['₦','$']),
            'initial_append' => fake()->randomElement(['Monthly','Annually']),
            'subsequent_append' => fake()->randomElement(['Monthly','Annually']),
            'created_at' => $this->faker->dateTimeBetween('-1 month','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 month','now')
        ];
    }
}
