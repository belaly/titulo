@extends('Admin.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">Lista de Cursos</div>
        <div class="panel-body">
            <p>Lista de cursos del jardín. En esta sección podrá agregar a la educadora a cargo de cada curso. <br> Pulse editar en el curso necesario para asignar educadora.</p>
            <br>
            <a href="{{route('curso.create')}}"  class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-list-alt"></span> Agregar Curso</a>
        </div>

        <table class="table table-striped table-hover ">

            <thead>
            <tr  class="info" >

                <th>Nombre</th>
                <th>Cantidad de alumnos</th>
                <th>Editar Curso</th>
                <th>Borrar Curso</th>

            </tr>
            </thead>
            <tbody>

            @foreach( $cursos as $curso )
                <tr>
                    <td>{{ $curso->name }}</td>
                    <td>{{ $curso->cantidad_alumnos }}</td>
                    <td align="center"> <a href="{{route('curso.edit', $curso->id)}}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil "></span></a> </td>

                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['curso.destroy', $curso->id]]) !!}
                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm'])!!}
                        {!! Form::close() !!}
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

@endsection