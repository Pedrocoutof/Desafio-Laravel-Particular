<?php

namespace Database\Seeders;

use App\Models\Alunos;
use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alunos::factory()
            ->count(50)
            ->create();
    }
}
