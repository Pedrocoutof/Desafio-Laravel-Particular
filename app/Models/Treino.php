<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id_funcionario',
        'id_aluno',
        'inicio',
        'fim',
        'valor',
    ];

    public function _funcionario(){
        return $this->hasOne(User::class, 'id', 'id_funcionario');
    }

    public function _aluno(){
        return $this->hasOne(Alunos::class, 'id', 'id_aluno');
    }
}
