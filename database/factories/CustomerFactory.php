<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['individual', 'business']);
        $name = ($type === 'individual') ? $this->faker->name() : $this->faker->company();

        return [
            'name' => $name,
            'mobile' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'postal_code' => $this->faker->postcode(),
            'type' => $type,
        ];
    }
}
