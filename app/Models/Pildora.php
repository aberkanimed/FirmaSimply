<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pildora extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'fecha_presentacion', 'estado', 'user_id'];
}
