<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $Placa
 * @property $idColor
 * @property $idMarca
 * @property $idTipovehiculo
 * @property $idConductor
 * @property $idPropietario
 * @property $created_at
 * @property $updated_at
 *
 * @property Colore $colore
 * @property Marca $marca
 * @property Persona $persona
 * @property Persona $persona
 * @property Tipovehiculo $tipovehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'Placa' => 'required',
		'idColor' => 'required',
		'idMarca' => 'required',
		'idTipovehiculo' => 'required',
		'idConductor' => 'required',
		'idPropietario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Placa','idColor','idMarca','idTipovehiculo','idConductor','idPropietario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function colore()
    {
        return $this->hasOne('App\Models\Colore', 'id', 'idColor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'idMarca');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'idPropietario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personaP()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'idConductor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipovehiculo()
    {
        return $this->hasOne('App\Models\Tipovehiculo', 'id', 'idTipovehiculo');
    }
    

}
