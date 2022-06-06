@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('models.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de modelos</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre del modelo</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($models as $key => $model)
                <tr>
                    <th scope="row">{{$model->id}}</th>
                    <td>{{$model->modelo}}</td>
                    <th>
                        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Borrar</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection