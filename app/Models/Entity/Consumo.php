<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    protected $filable = ['combustivel', 'consumo-viagem', 'consumo-km'];

    protected $hidden = ['password', 'remmembeer_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'Consumo';
}
