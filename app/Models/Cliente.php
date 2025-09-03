<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $primaryKey = 'cliente_id';

    protected $fillable = ['name_cliente', 'lastname_cliente', 'domicilio_cliente', 'release_date_cliente'
    ,'compras_cliente','dni_cliente','telefono_cliente'];

 public function user()
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}
public function productos()
{
    return $this->belongsToMany(Producto::class, 'ventas', 'cliente_id', 'producto_id')
                ->withPivot('fecha_venta')
                ->withTimestamps();
}
}