<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colore
 *
 * @property $id
 * @property $Color
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Colore extends Model
{
    
    static $rules = [
		'Color' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Color'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idColor', 'id');
    }
    

}
