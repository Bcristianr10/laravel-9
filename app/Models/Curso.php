<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    
    //agregar los campos que se quieren ingresar ya que en el controllador se va a usar la propiedad all()
    protected $fillable = ['name', 'description', 'category'];
    //para no utilizar el metodo anterior se puede usar este y solo les indica los campos protegidos
    // protected $guarder = [''];
    
    
}
