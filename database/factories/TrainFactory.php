<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> sentence(3),
            'stazione_partenza' => fake() ->word(),
            'stazione_arrivo' => fake() ->word(),
            'orario_partenza' => fake() ->dateTime(),
            'orario_arrivo' => fake() ->dateTime(),
            'codice_treno' => fake() ->ean8(),
            'num_carrozze' => fake() ->randomDigit(),
            'in_orario' => fake() ->boolean(),
            'cancellato' => fake() ->boolean()
        ];
    }
}
