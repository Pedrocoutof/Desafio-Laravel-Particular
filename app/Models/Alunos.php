<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'data_nascimento',
        'telefone',
        'endereco',
        'data_cadastro',
        'data_pagamento',
        'data_vencimento',
    ];

    public function enderecoAluno(){
        return $this->hasOne(EnderecosAluno::class, 'id');
    }

    public function _treino(){
        return $this->hasMany(Treino::class, 'id');
    }

}
