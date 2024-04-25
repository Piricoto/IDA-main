<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensaje
 *
 * @property $id
 * @property $emisor_id
 * @property $receptor_id
 * @property $propiedad_id
 * @property $contenido
 * @property $leido
 * @property $fecha_enviado
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Propiedade $propiedade
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensaje extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['emisor_id', 'receptor_id', 'propiedad_id', 'contenido', 'leido', 'fecha_enviado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userEmisor()
    {
        return $this->belongsTo(\App\Models\User::class, 'emisor_id', 'id');
    }
    
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
    public function userReceptor()
    {
        return $this->belongsTo(\App\Models\User::class, 'receptor_id', 'id');
    }
    

}
