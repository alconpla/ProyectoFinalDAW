<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conexion extends Model
{
    protected $table = 'conexion';
    // protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;
    protected $fillable = [ "iduser", "idpuntoacceso", "fecha", "hora", "mac"];
    
    public function puntoacceso(){
        return $this->belongsTo('App\PuntoAcceso','idpuntoacceso');
    }
    public function activo(){
        return $this->hasMany('App\Activo');
    }
}
