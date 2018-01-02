@extends('Admin.app')

@section('content')


    <div class="panel panel-default">

        <div class="panel-heading">Crear Usuario</div>

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
                    <input class="form-control input-sm"  placeholder="Ingrese nombre de usuario" name="name" type="text" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Correo electrónico</label>
                <div class="col-lg-4">
                    <input class="form-control input-sm"  placeholder="Ingrese e-mail del usuario" name="email" type="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-lg-2 control-label">Contraseña</label>
                <div class="col-lg-4">
                    <input class="form-control input-sm" placeholder="Asigne contraseña" name="password" type="text" value="{{ old('password', str_random(8)) }}">
                </div>
            </div>


            <div class="form-group">
                <label for="role" class="col-lg-2 control-label">Rol</label>
                <div class="col-lg-3">
                    <Input readonly type="text" class="form-control" name="role" value="1">
                </div>

            </div>


            <!--  <div class="form-group">
                  <label for="role" class="col-lg-2 control-label">Rol</label>
                  <div class="col-lg-3">
                      <select class="form-control input-sm">
                          <option>Administrador</option>
                          <option>Educadora</option>
                      </select>
                  </div>
              </div>
              -->


              <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Agregar usuario</button>
                  </div>
              </div>
          </form>

          </div>

      </div>

  @endsection
