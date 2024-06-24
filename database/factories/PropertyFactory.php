<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Property;
use Faker\Provider\Text;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Property::class;

    public function definition(): array
    {
     $agent_id = DB::table('users')->inRandomOrder()->first()->id;
     $type_id = DB::table('property_types')->inRandomOrder()->first()->id;
     $image = "https://picsum.photos/800/600?random=".$this->faker->unique()->numberBetween(1,1000);
     $propertyID = "EP"."".(int) substr(Str::orderedUuid(),0,8)."".$this->faker->unique()->numberBetween(1,1000);;
    //  $futureDateTime = new DateTime($faker->dateTimeBetween('now','+3 month'));
    //  $pastDateTime = new DateTime((fake()->dateTimeBetween('now','-3 month')));

        return [
            'title' => $this->faker->sentence(),
            'type_id' => $type_id,
            'agent_id' => $agent_id,
            'furnishing' => fake()->randomElement(['Yes','No']),
            'installment' =>  fake()->randomElement(['Yes','No']),
            'C_of_O' =>  fake()->randomElement(['Yes','No']),
            'survey_plan' =>  fake()->randomElement(['Yes','No']),
            'deed_of_ass' =>  fake()->randomElement(['Yes','No']),
            'grant_of_prob' =>  fake()->randomElement(['Yes','No']),
            'deed_of_mort' =>  fake()->randomElement(['Yes','No']),
            'deed_of_gift' =>  fake()->randomElement(['Yes','No']),
            'property_doc' =>  fake()->randomElement(['Yes','No']),
            'land_receipt' =>  fake()->randomElement(['Yes','No']),
            'status' =>  fake()->randomElement(['Sale','Rent','Let','Land']),
            'property_code'=>$propertyID,
            'bedrooms' => fake()->randomNumber(1,5),
            'avg_room_size'=> fake()->randomNumber(70,150),
            'bathrooms' => fake()->randomNumber(1,4),
            'toilets' => fake()->randomNumber(1,4),
            'state' => fake()->randomElement(['Lagos','Ogun','Oyo','Kaduna','Sokoto','Enugu']),
            'localty' => fake()->city() ,
            'area' =>  fake()->randomElement(['Shopping Mall','Secretariat','LGA','Alloy Plaza','Mr Biggs Eatery']),
            'street' => fake()->streetAddress(),
            'description' => fake()->sentence(),
            'thumbnail' => $image,
            'created_at'=>$this->faker->dateTimeBetween('now','+3 month')
        ];
        // Pick a random user_id from existing users
    }
}
