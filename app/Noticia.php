<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Noticia extends Model
{
    protected $fillable = ['fecha', 'name', 'contenido'];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }


}
