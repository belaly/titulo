@extends('Admin.app')

@section('content')


    <div class="panel panel-default">

        <div class="panel-heading">Editar Curso</div>

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


            <form action="{{url('curso')}}" method="POST"  class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-4">
                        <input type="text" name="name" class="form-control" value="{{ $curso->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="cantidad_alumnos" class="col-lg-2 control-label">Cantidad de alumnos</label>
                    <div class="col-lg-4">
                        <input type="text" name="cantidad_alumnos" class="form-control" value="{{ $curso->cantidad_alumnos }}">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

@endsection
