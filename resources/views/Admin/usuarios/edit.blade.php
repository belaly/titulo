@extends('Admin.app')

@section('content')


    <div class="panel panel-default">

        <div class="panel-heading">Editar Usuario</div>

        <div class="panel-body">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ @error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{url('user')}}" method="POST"  class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-4">
                        <input class="form-control input-sm"   type="text"  value="{{ $user->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Correo electrónico</label>
                    <div class="col-lg-4">
                        <input class="form-control input-sm"  type="email" value="{{ $user->email }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Contraseña <em>Ingresar solo para modificar</em></label>
                    <div class="col-lg-4">
                        <input class="form-control input-sm" placeholder="Ingresar nueva contraseña" type="text" value="{{ old('password') }}">
                    </div>
                </div>


                 <div class="form-group">
                     <div class="col-lg-10 col-lg-offset-2">
                         <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                     </div>
                 </div>
             </form>


                <form action="/curso-educadora" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="row">
                        <div class="col-lg-4">
                            <select name="id_curso" class="form-control" >
                                <option value="">Seleccione curso</option>
                                @foreach ($cursos as $curso)
                                    <option value="{{ $curso->id }}">{{ $curso->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <button class="btn btn-primary btn-block">Asignar Curso</button>
                        </div>
                    </div>
                </form>

                <p>Cursos asignados</p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Curso</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($cursos_users as $curso_user)
                        <tr>
                            <td>{{ $curso_user->curso->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

         </div>

     </div>

 @endsection
