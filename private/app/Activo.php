<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $table = 'activo';
    protected $hidden = ['created_at','updated_at'];

    protected $fillable = ["fechainicial", "fechafinal", "horainicial", "horafinal", "periodominimo"];
}
