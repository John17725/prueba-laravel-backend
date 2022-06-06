@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('places.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de cantidad de plazas en el vehiculo</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Numero de plazas</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($places as $Key => $place)
                <tr>
                    <th scope="row">{{$place->id}}</th>
                    <td>{{$place->cantidad}} Plazas</td>
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