<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\UserFactory;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'category' => $this->faker->randomElement(['odjeca i obuca', 'bijela tehnika', 'tehnologija', 'namjestaj', 'ostalo']),
            //'image' => $faker->image('public/storage/images',640,480, null, false),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            
        ];
    }
}
