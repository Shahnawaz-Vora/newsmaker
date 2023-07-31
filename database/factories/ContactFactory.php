<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

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
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->phoneNumber,
            'Company' => $this->faker->company,
            'subject' => $this->faker->sentence,
            'comments' => $this->faker->paragraph,
            'isContacted' => $this->faker->randomElement([0, 1]), // Randomly set to 0 or 1
        ];
    }
}
