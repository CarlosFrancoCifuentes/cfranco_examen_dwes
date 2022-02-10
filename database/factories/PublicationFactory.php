<?php

namespace Database\Factories;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublicationFactory extends Factory
{
    protected $model = Publication::class;

    public function definition()
    {
        return [
            "titulo" => $this->faker->word(),
            "extracto" => $this->faker->text(),
            "contenido" => $this->faker->text(),
            "caducable" => $this->faker->boolean(),
            "comentable" => $this->faker->boolean()
        ];
    }
}
