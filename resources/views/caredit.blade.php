<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Laravel MongoDB CRUD</h2>
    <ol class="breadcrumb">
        <li><a href="{{action('CarController@index')}}">Inicio</a></li>
        <li class="active">Editar</li>
    </ol>
    <form method="post" action="{{action('CarController@update', $id)}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Carcompany">Marca</label>
                <input type="text" class="form-control" name="carcompany" value="{{$car->carcompany}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Model">Modelo:</label>
                <input type="text" class="form-control" name="model" value="{{$car->model}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Price">Precio:</label>
                <input type="text" class="form-control" name="price" value="{{$car->price}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{action('CarController@index')}}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
