<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <br />
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
            @endif
            <h3>Personas</h3>
            <span class="pull-right"><a href="{{action('PersonaController@create')}}" class="btn btn-success">Agregar</a></span>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th colspan="2">Acción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>{{$persona['id']}}</td>
                        <td>{{$persona['nombre']}}</td>
                        <td>{{$persona['apellido']}}</td>
                        <td>{{$persona['telefono']}}</td>
                        <td>{{$persona['edad']}}</td>
                        <td><a href="{{action('PersonaController@edit', $persona['id'])}}" class="btn btn-warning">Editar</a></td>
                        <td>
                        <form action="{{action('PersonaController@destroy', $persona['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>