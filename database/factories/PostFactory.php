<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'name'=> $this->faker->name(),
                'description'=>$this->faker->sentence(),
                'price'=>$this->faker->randomFloat(2,50,5000),
                'category'=>'Female, Dress, Womens',
                'user_id'=> 1,
        ];
    }
}
