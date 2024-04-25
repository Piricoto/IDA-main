<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bid
 *
 * @property $id
 * @property $user_id
 * @property $propiedad_id
 * @property $apuesta
 * @property $created_at
 * @property $updated_at
 *
 * @property Propiedade $propiedade
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bid extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'propiedad_id', 'apuesta', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function propiedade()
    {
        return $this->belongsTo(\App\Models\Propiedades::class, 'propiedad_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    

}
