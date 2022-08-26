<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $idTipopersona
 * @property $Cedula
 * @property $Primernombre
 * @property $Segundonombre
 * @property $Apellidos
 * @property $Direccion
 * @property $Telefono
 * @property $Ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @property Tipopersona $tipopersona
 * @property Vehiculo[] $vehiculos
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'idTipopersona' => 'required',
		'Cedula' => 'required',
		// 'Cedula' => 'unique:App\Models\Persona,Cedula',
		'Primernombre' => 'required',
		'Segundonombre' => 'nullable',
		// 'Segundonombre' => 'min:2',
		'Apellidos' => 'required',
		'Direccion' => 'required',
		'Telefono' => 'required',
		'Ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idTipopersona','Cedula','Primernombre','Segundonombre','Apellidos','Direccion','Telefono','Ciudad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipopersona()
    {
        return $this->hasOne('App\Models\Tipopersona', 'id', 'idTipopersona');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idConductor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculosP()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idPropietario', 'id');
    }
    

}
