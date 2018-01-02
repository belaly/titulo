<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;


class Comentario extends Model
{
    protected $fillable = [ 'fecha', 'observacion'];



    public function alumno(){
        return $this->belongsTo('App\Alumno', 'id_alumno');
    }
}
