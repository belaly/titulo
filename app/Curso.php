<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Alumno;


class Curso extends Model
{
    protected $fillable = ['name', 'cantidad_alumnos'];



    public function users(){
        return $this->belongsToMany('App\User', 'id_curso', 'id_user');
    }


    public function alumnos() {
        return $this->hasMany('App\Alumno');
    }


}


