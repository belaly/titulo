<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Alumno;
use App\Curso;
use App\Noticia;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function cursos(){
        return $this->belongsToMany('App\Curso', 'user_curso', 'id_user', 'id_curso');
    }



    public function alumnos(){
        return $this->hasMany('App\Alumno', 'id_alumno');
    }

    public function noticias(){
        return $this->hasMany('App\Noticia', 'id_noticia');
    }


}
