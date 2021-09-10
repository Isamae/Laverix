<?php

namespace App\Models;

/**
 * Class Usuario
 *
 * @property $id
 * @property $email
 * @property $nombre
 * @property $apellido
 * @property $password
 * @property $telefono
 * @property $fechaNacimiento
 * @property $direccion
 * @property $rol
 * @property $created_at
 * @property $updated_at
 *
 */

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'usuarios';

    /**
     * Atributos asignables
     *
     * @var array
     */

    protected $fillable = ['email','nombre','apellido','password','telefono','fechaNacimiento','direccion','rol'];
    
    /**
     * Atributos hidden
     *
     * @var array
     */ 
    protected $hidden = ['password','remember_token'];
}
