<?php

namespace Database\Factories;
use App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'reference_id' => $this->faker->uuid,
            'description' => $this->faker->sentence,
            'debited_wallet' => null,
            'credited_wallet' => null,
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'type' => $this->faker->randomElement(['topup', 'donate']),
            'method' => null,
            'status' => $this->faker->randomElement(['1', '2', '3', '4']),
            'snap_token' => null,
        ];
    }
}
