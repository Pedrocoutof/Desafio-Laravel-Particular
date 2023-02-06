<?php

namespace Database\Seeders;

use App\Models\EnderecoUser;
use App\Models\User;
use Carbon\Carbon;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Criando o admin
        User::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'telefone' => '21999999999',
            'name' => 'Admin',
            'is_admin' => '1',
            'email_verified_at' => Carbon::now(),
            'endereco' => EnderecoUser::factory()->create()->id,
        ]);

        // Criando os funcionarios
        User::factory()
            ->count(10)
            ->create();
    }
}
