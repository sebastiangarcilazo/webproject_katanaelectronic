<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'producto_id';

    protected $fillable = ['title', 'price', 'release_date', 'description','imagen'];
    public function clientes()
{
    return $this->belongsToMany(Cliente::class, 'ventas', 'producto_id', 'cliente_id')
                ->withPivot('fecha_venta')
                ->withTimestamps();
}
}
