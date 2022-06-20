<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    protected function name():Attribute
    {
        return new Attribute(
            //Efecto Accesores
            // lo que hace es que al momento de traer los datos de la base de datos
            // los modifica antes de entregarlos
            //metodo ucwords de php para manejar los datos
            get: fn($value)=>ucwords($value)
            ,
            // Efecto mutador
            // lo que hace es que al momento de enviar los datos de la base de datos
            // los modifica antes de enviarlos
            // metodo strtolower de php para manejar los datos
            set: fn($value)=>strtolower($value)

            // se puede declarar las funciones como arrow function de javascript
            // sin llaves, sin punto y coma.
            
        );
    }
}
