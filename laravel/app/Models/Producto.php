<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes; // Incluye el trait SoftDeletes

    protected $table = 'productos'; // Especifica el nombre de la tabla si no sigue la convención de nombres de Laravel

    protected $fillable = [
        'codigo_producto',
        'marca',
        'modelo',
        'nombre',
        'stock'
    ];

    public function precios()
    {
        return $this->hasMany(PrecioProducto::class, 'producto_id');
    }

}
