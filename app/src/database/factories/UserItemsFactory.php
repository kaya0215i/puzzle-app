<?php

namespace Database\Factories;

use App\Models\UserItems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserItems>
 */
class UserItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = UserItems::class;

    public function definition(): array
    {
        $scheduled = $this->faker->dateTimeBetween('+1day', '+1year');
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 100),
            'item_id' => $this->faker->numberBetween(1, 4),
            'amount' => $this->faker->numberBetween(1, 999),
            'created_at' => $scheduled->format('Y-m-d H:i:s'),
            'updated_at' => $scheduled->modify('+1hour')->format('Y-m-d H:i:s'),
        ];
    }
}
