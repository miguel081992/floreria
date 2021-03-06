<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $insumo_id
 * @property $cantidadInsumo
 * @property $nombreProducto
 * @property $costo
 * @property $precioVenta
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'insumo_id' => 'required',
		'cantidadInsumo' => 'required',
		'nombreProducto' => 'required',
		'precioVenta' => 'required',
		'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['insumo_id','cantidadInsumo','nombreProducto','costo','precioVenta','disponible'];



}
