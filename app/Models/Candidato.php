<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'email', 'endereco', 'bairro', 'cidade', 'uf', 'limite_credito', 'data_analise_credito'];
}
