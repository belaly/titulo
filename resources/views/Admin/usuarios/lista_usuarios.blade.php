@extends('Admin.app')

@section('content')

                <div class="panel panel-default">

                    <div class="panel-heading">Lista de Usuarios</div>
                    <div class="panel-body">
                        <p>Lista de educadoras del jardín</p>
                        <br>
                        <a href="{{route('user.create')}}" class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-user"></span> Agregar Usuario</a>
                    </div>

                    <table class="table table-striped table-hover ">

                        <thead>
                        <tr  class="info" >

                            <th>Nombre</th>
                            <th>E-mail</th>
                            <th>Rol</th>
                            <th>Editar Usuario</th>
                            <th>Borrar Usuario</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach( $users as $user )
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td align="center"> <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary btn-sm" title="Editar"><span class="glyphicon glyphicon-pencil "></span></a> </td>

                           <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                            {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm'])!!}
                            {!! Form::close() !!}
                           </td>

                        </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

@endsection