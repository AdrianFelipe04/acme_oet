<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipopersona
 *
 * @property $id
 * @property $Tipopersona
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona[] $personas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipopersona extends Model
{
    
    static $rules = [
		'Tipopersona' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Tipopersona'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas()
    {
        return $this->hasMany('App\Models\Persona', 'idTipopersona', 'id');
    }
    

}
