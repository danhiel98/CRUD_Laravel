<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel 5.6 CRUD Tutorial With Example </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <h2>Editar</h2><br  />
            <form method="post" action="{{action('PersonaController@update', $id)}}">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Nombre">Nombres:</label>
                        <input type="text" class="form-control" name="nombre" value="{{$persona->nombre}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Apellido">Apellidos</label>
                        <input type="text" class="form-control" name="apellido" value="{{$persona->apellido}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Telefono">Teléfono:</label>
                        <input type="text" class="form-control" name="telefono" value="{{$persona->telefono}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Edad">Edad:</label>
                        <input type="text" class="form-control" name="edad" value="{{$persona->edad}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4" style="margin-top:60px">
                        <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>