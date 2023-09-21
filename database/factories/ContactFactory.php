<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>fake()->word(2),
            "phone" => fake()->phoneNumber,
            "email"=>fake()->email,
            "website"=>fake()->word,
            "note"=>fake()->sentence(6),
            "birthday"=>fake()->date, 
            "created_at"=>fake()->dateTimeBetween('-1 years', 'now'),
            "updated_at" => fake()->dateTimeBetween('created_at', 'now'),
        ];
    }
}
