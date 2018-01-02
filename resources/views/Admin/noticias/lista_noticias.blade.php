@extends('Admin.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">Lista de Noticias</div>
        <div class="panel-body">
            <p>Se encuentra en esta sección el listado de comunicados que se entregarán a los padres y apoderados.</p>
            <br>
            <a href="{{route('noticia.create')}}"  class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-list-alt"></span> Agregar Noticia</a>
        </div>

        <table class="table table-striped table-hover ">

            <thead>
            <tr  class="info" >

                <th>Fecha</th>
                <th>Título</th>
                <th>Ver Contenido</th>
                <th>Editar Noticia</th>
                <th>Borrar Noticia</th>

            </tr>
            </thead>
            <tbody>

            @foreach( $noticias as $noticia )
                <tr>
                    <td>{{ $noticia->fecha }}</td>
                    <td>{{ $noticia->nombre }}</td>
                    <td>{{ $noticia->noticia }}</td>
                    <td align="center"> <a href="{{route('noticia.edit', $noticia->id)}}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil "></span></a> </td>

                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['noticia.destroy', $noticia->id]]) !!}
                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm'])!!}
                        {!! Form::close() !!}
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

@endsection