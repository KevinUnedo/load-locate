<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = Carbon::create(2023, 9, 1);
        $endDate = Carbon::create(2023, 10, 31);
    
        return [
            'name' => $this->faker->word(),
            'date' => $this->faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d'),
            'category' => $this->faker->word(),
            'location' => $this->faker->word(),
            'more_information' => $this->faker->text(),
            'information' => $this->faker->boolean,
            'user_id' => mt_rand(1, 50),
            'is_claimed' => $this->faker->boolean,
        ];
    }
}
