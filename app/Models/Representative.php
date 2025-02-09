<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;

    protected $table = 'representantes';

    protected $fillable = [
        'nome',
        'email',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf',
    ];

    public $timestamps = false;
}
