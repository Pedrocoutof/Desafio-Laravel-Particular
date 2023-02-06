<?php

namespace Database\Factories;

use App\Models\EnderecosAluno;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alunos>
 */
class AlunosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->email(),
            'data_nascimento' => $this->faker->dateTimeThisCentury(),
            'telefone' => $this->faker->phoneNumber(),
            'data_cadastro' => $this->faker->dateTimeThisDecade(),
            'data_pagamento' => $this->faker->dateTimeThisYear(),
            'data_vencimento' => $this->faker->dateTimeThisMonth(),
            'endereco' => EnderecosAluno::factory()->create()->id,
        ];
    }
}
