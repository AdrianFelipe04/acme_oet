<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipovehiculo
 *
 * @property $id
 * @property $Tipovehiculo
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipovehiculo extends Model
{
    
    static $rules = [
		'Tipovehiculo' => 'required',
		'Tipovehiculo' => 'max:20',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tipovehiculo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idTipovehiculo', 'id');
    }
    

}
