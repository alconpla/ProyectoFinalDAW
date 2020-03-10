<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class PuntoAcceso extends Model
{
    // use SoftDeletes;

    protected $table = 'puntoacceso';
    public $timestamps = false;
    // protected $hidden = ['created_at','updated_at'];

    protected $fillable = [ "iduser", "modelo", "ubicacion", "latitud", "longitud", "fechaalta"];
    
    public function user(){
        return $this->belongsTo('App\User','iduser');
    }
    
    public function conexion(){
        return $this->hasMany('App\Conexion');
    }
}
