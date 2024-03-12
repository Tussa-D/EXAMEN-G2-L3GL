<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicule>
 */
class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => 'Type de véhicule',
            'dateachat' => now()->format('Y-m-d'),
            'kmdefaut' => random_int(1000, 5000),
            'matricule' => 'Valeur par défaut',
            'statut' => 'Actif',
            'chauffeur' => 'Nom du chauffeur',
            'image' => 'imageUrl',
        ];
    }
}
