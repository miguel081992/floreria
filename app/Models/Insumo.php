<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insumo
 *
 * @property $id
 * @property $nombreInsumo
 * @property $cantidad
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insumo extends Model
{
    
    static $rules = [
		'nombreInsumo' => 'required',
		'cantidad' => 'required',
		'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreInsumo','cantidad','disponible'];



}
