<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{ 
    protected $model = Announcement::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), 
            'body' => $this->faker->paragraph(), 
            'price' => $this->faker->randomFloat(2, 0, 1000),

            'category_id' => $this->faker->numberBetween(1, 10),
            'user_id' => User::whereBetween('id', [2, 10])->pluck('id')->random(),


            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
