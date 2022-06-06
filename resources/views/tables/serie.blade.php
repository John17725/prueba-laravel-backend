@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('series.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de tipos de serie de los vehiculos</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tipo de carroceria</th>
            <th scope="col">Cantidad de puertas</th>
            <th scope="col">Version o variante del vehiculo</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $key => $serie)
                <tr>
                    <th scope="row">{{$serie->id}}</th>
                    <td>{{$serie->Carroceria->tipo}}</td>
                    <td>{{$serie->puertas}}</td>
                    <td>{{$serie->version}}</td>
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