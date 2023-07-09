<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1,10), //rand: numeros aletorios, en este caso del 1 al 10
            'title' => $this->faker->sentence, //faker: genera datos falsos sentence:oración al azar
            'slug' => $this->faker->slug, // aqui seria un slug falso y no una oración
            'content' => $this->faker->text(1600), // aqui genera un texto falso de 1600 caracteres
        ];
    }
}
