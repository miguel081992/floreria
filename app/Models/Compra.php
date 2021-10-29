<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $insumo_id
 * @property $proveedor
 * @property $costo
 * @property $cantidad
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'insumo_id' => 'required',
		'costo' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['insumo_id','proveedor','costo','cantidad','total'];



}
