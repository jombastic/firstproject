<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'founded' => $this->faker->paragraph(),
            'created_at' => now(),

            // $table->integer('founded');
            // $table->longText('description');
            // $table->timestamps();
        ];
    }
}
