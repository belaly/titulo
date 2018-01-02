<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;
use App\User;
use App\Reporte;
use App\Comentario;



class Alumno extends Model
{
    protected $fillable = ['name', 'edad', 'fecha_nacimiento', 'ano_ingreso'];



    public function curso(){
        return $this->belongsTo('App\Curso', 'id_curso');
    }

    public function apoderado(){
        return $this->belongsTo('App\User', 'id_apoderado');
    }


    public function reportes() {
        return $this->hasMany('App\Reporte');
    }

    public function comentarios() {
        return $this->hasMany('App\Comentario');

    }


}
