@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">PAPITOS !!</h3>

                    </div>
                    <div class="panel-body">
                        En esta sección podrán ver información importante del día a día del jardín.
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8 col-md-offset-2">
             <table class="table table-striped table-hover ">

                 <thead>
                    <tr  class="info">
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Ver Noticia</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Column content</td>
                        <td>Column content</td>
                    </tr>

                    </tbody>
              </table>
        </div>
    </div>
@endsection