<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tareas extends Model
{
    protected $fillable = ['titulo', 'descripcion'];

    use HasFactory;
}
