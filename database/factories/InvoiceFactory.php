<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['billed', 'paid', 'void']);

        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 999),
            'status' => $status,
            'billed_at' => $this->faker->dateTimeThisMonth(),
            'paid_at' => ($status === 'paid') ? $this->faker->dateTimeThisMonth() : null,
        ];
    }
}
