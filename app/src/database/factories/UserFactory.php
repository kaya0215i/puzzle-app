<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = User::class;

    public function definition(): array
    {
        $scheduled = $this->faker->dateTimeBetween('+1day', '+1year');
        return [
            'name' => $this->faker->unique()->name(),
            'level' => $this->faker->numberBetween(1, 100),
            'exp' => $this->faker->randomNumber(5),
            'created_at' => $scheduled->format('Y-m-d H:i:s'),
            'updated_at' => $scheduled->modify('+1hour')->format('Y-m-d H:i:s')
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
