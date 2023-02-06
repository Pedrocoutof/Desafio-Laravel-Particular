<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecosAluno extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'cidade',
        'bairro',
        'rua',
        'numero'
    ];

    public function aluno(){
        return $this->belongsTo(Alunos::class);
    }

}
