<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'email',
        'cnpj',
        'cpf',
        'telefone_1',
        'telefone_2',
        'data_fundacao',
        'data_nascimento',
        'representante_id',
    ];

    public $timestamps = false;
}
