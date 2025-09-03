<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
   protected $fillable = [
    'nombre', 'apellido', 'email', 'telefono',
    'reason', 'mensaje', 'archivo', 'respondido'
];
}
