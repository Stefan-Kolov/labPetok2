<?php

namespace Database\Factories;

use App\Models\Organizer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['семинар', 'работилница', 'предавање'];

        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text(100),
            'type' => $this->faker->randomElement($types),
            'date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'organizer_id' => Organizer::inRandomOrder()->first()->id ?? Organizer::factory(),
        ];
    }
}
