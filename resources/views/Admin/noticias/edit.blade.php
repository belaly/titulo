@extends('Admin.app')

@section('content')


    <div class="panel panel-default">

        <div class="panel-heading">Editar Noticia</div>

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
                        <input type="text" name="fecha" class="form-control" value="{{ $noticia->fecha }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Título</label>
                    <div class="col-lg-4">
                        <input type="text" name="name" class="form-control" value="{{ $noticia->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contenido" class="col-lg-2 control-label">Contenido</label>
                    <textarea class="col-lg-4" rows="6"  name="contenido" type="text" value="{{ $noticia->contenido }}" spellcheck="true"></textarea>

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
