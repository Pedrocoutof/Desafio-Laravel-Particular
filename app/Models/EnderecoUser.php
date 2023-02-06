<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoUser extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'cidade',
        'bairro',
        'rua',
        'numero'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
