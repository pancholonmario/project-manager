<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //agregaremos una variable protegida con el nombre de la tabla (tal como se llama en la base de datos) y otra indicando la llave primaria de esta tabla
protected $table = 'projects';
protected $primarykey = 'id';

protected $attributes = [
    'name' => 'hola',
];

}
