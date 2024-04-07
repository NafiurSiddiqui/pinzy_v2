<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PinFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $eventTypes = ['alert', 'warning', 'concert', 'deals', 'recreational', 'tourist attraction'];
        return [
            'user_id'=> User::factory(),
            'event_type'=> fake()->randomElement($eventTypes),
            'lat' => fake()->latitude,
            'lng' => fake()->longitude,
            'body'=>fake()->paragraph(2),
            'disregard'=> false
        ];
    }

    public function disregardPin():static
    {
        return $this->state(fn(array $attributes)=> [
            'disregard' => true
        ]);
    }
}
