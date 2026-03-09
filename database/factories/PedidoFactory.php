<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'numero' => 'PED-' . $this->faker->unique()->numberBetween(1000, 9999),
            'data' => $this->faker->date(),
            'status' => $this->faker->randomElement(['aberto', 'em_producao', 'entregue']),
            'observacao' => $this->faker->sentence(),
        ];
    }
}