<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    protected $filable = ['relatorio-viagem', 'relatorio-mensal'];

    protected $hidden = ['password', 'remmembeer_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'Contratos';
}
