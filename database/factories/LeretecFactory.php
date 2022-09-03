<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leretec>
 */
class LeretecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'name_aluno' => $this->faker->name(),
            'class_aluno' => 'DS',
            'grade_aluno' => rand(1,2),
            'title_historia' => $this->faker->name(),
            'sinopse_historia' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque similique numquam facilis, tenetur porro quas iure expedita architecto? Ab, quidem blanditiis veniam repellendus quam beatae autem aut quod minus esse.',
             'historia' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque similique numquam facilis, tenetur porro quas iure expedita architecto? Ab, quidem blanditiis veniam repellendus quam beatae autem aut quod minus esse.'
        ];
    }
}
