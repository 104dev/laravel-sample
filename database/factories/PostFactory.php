<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        $created_at = $this->faker->dateTimeBetween('-1year', '+1year');
        $updated_at = $this->faker->dateTimeBetween('+2years', '+3years');
        return [
            'user_id' => User::where('flg', 1)->inRandomOrder()->first()->id,
            'content' => $this->faker->realText($maxNbChars = 1000),
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ];
    }
}
