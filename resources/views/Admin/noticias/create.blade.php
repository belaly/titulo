@extends('Admin.app')

@section('content')


    <div class="panel panel-default">

        <div class="panel-heading">Agregar Noticia</div>

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


            <form action="{{url('noticia')}}" method="POST"  class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="fecha" class="col-lg-2 control-label">Fecha</label>
                    <div class="col-lg-4">
                        <input class="form-control input-sm"  placeholder="Ingrese fecha" name="fecha" type="text" value="{{ old('fecha') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Título</label>
                    <div class="col-lg-4">
                        <input class="form-control input-sm"  placeholder="Ingrese el título de la noticia" name="name" type="text" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contenido" class="col-lg-2 control-label">Contenido</label>
                    <textarea class="col-lg-4" rows="6" placeholder="Ingrese el contenido de la noticia" name="contenido" type="text" value="{{ old('contenido') }}" spellcheck="true"></textarea>

                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Agregar Noticia</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

@endsection
