<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;


class Reporte extends Model
{
    protected $fillable = ['fecha', 'bano', 'colacion', 'actividad'];



    public function alumno(){
        return $this->belongsTo('App\Alumno', 'id_alumno');
    }


}
