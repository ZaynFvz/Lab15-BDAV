<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Laravel MongoDB CRUD</h2>
    <ol class="breadcrumb">
        <li class="active">Lista</li>
    </ol>
    <p><a href="{{action('CarController@create')}}" class="btn btn-primary">Nuevo</a><p>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th colspan="2" style="text-align:center;">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->carcompany}}</td>
                <td>{{$car->model}}</td>
                <td>S/ {{$car->price}}</td>
                <td style="text-align:center;"><a href="{{action('CarController@edit', $car->id)}}" class="btn btn-warning">Editar</a></td>
                <td style="text-align:center;">
                    <form action="{{action('CarController@destroy', $car->id)}}" method="post">
                        {{ csrf_field() }}
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
