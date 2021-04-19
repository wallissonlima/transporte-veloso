<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $filable = ['onibus', 'usuario', 'email', 'cpf', 'motorista', 'mecanico','pecas',];

    protected $hidden = ['password', 'remmembeer_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'Cadastro';
}
