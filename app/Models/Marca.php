<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $Marca
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    
    static $rules = [
		'Marca' => 'required',
    // nullable
    ];

    static $message = [
      'Marca.required' => 'El campo Marca no puede estar vacio'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Marca'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idMarca', 'id');
    }
    

}
