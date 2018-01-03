<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\CursoUser;
use App\Curso;
use App\User;

class CursoUserController extends Controller
{
    public function store(Request $request)
    {
        
        $id_curso = $request->input('id_curso');
        $id_user = $request->input('id_user');
        $cursos_users = CursoUser::where('id_curso', $id_curso)
            ->where('id_user', $id_user)->first();
        if ($cursos_users)
            return back()->with('notification', 'El usuario ya pertenece a este curso.');
        $cursos_users = new CursoUser();
        $cursos_users->project_id = $id_curso;
        $cursos_users->user_id = $id_user;

        $cursos_users->save();
        return back();
    }
    public function delete($id)
    {
        $cursos_users = CursoUser::find($id);
        $cursos_users->delete();
        return Redirect::route('user.index');

    }
}
