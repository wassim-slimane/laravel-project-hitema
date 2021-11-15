<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->numberBetween(1, 4),
            'title' => $this->faker->sentence(5),
            'chapter_num' => $this->faker->numberBetween(1, 10),
            'discipline' => $this->faker->sentence(5),
            'subject' => $this->faker->sentence(10),
        ];
    }
}
