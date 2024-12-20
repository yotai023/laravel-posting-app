<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
    public function definition(): array
    {

       /* return [
            'title' => fake()->unique()->randomNumber(5, true), 
            'content' => fake()->company(),
            'user_id' => function() {
            return User::factory()->create()->id;
        },
        ];
        */
        
        return [
            'user_id' => 6, 
            'title' => fake()->realText(20, 5),
            'content' => fake()->realText(200, 5)
       ];

    }

    
}
