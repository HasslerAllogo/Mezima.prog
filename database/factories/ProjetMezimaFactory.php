<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjetMezima>
 */
class ProjetMezimaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomProjet'=> $this->faker->name(),
            'nomClient'=> $this->faker->name(),
            'nomResponsable'=> $this->faker->name(),
            'nomService'=>"ENERGIE",
            'dureeProjet'=>4,
            // 'statutProjet'=>'En cours',
            'nbrTache'=>2,
            'nbrTacheFini'=>1,
            'description'=> $this->faker->paragraph(),
        ];
    }
}
