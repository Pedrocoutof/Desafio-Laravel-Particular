<?php

namespace Database\Factories;

use App\Models\EnderecoUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Criando os funcionarios
        return [
                'email' => $this->faker->email(),
                'password' => Hash::make('12345678'),
                'name' => $this->faker->name(),
                'telefone' => $this->faker->phoneNumber(),
                'is_admin' => '0',
                'email_verified_at' => Carbon::now(),
                'endereco' => EnderecoUser::factory()->create()->id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
