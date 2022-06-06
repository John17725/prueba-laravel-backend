@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('vehicles.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
        
    </div>
    <table class="table mt-4">
        <caption>Tabla de vehiculos</caption>
        <thead>
            <tr>
                <th scope="col">VIN</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Tipo de motor</th>
                <th scope="col">Tipo de traccion</th>
                <th scope="col">Año del vehiculo</th>
                <th scope="col">Serie del vehiculo</th>
                <th scope="col">Tipo de caja de cambios</th>
                <th scope="col">Peso en orden de marcha</th>
                <th scope="col text-center" >Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $key => $vehiculo)
                <tr>
                    <th scope="row">{{$vehiculo->id}}</th>
                    <td>{{$vehiculo->marca->nombre}}</td>
                    <td>{{$vehiculo->modelo->modelo}}</td>
                    <td>{{$vehiculo->motor->combustible}}</td>
                    <td>{{$vehiculo->traccion->tipo}}</td>
                    <td>{{$vehiculo->year_vehicle->year}}</td>
                    <td>{{$vehiculo->serie->Carroceria->tipo}} {{$vehiculo->serie->Carroceria->tipo}} {{$vehiculo->serie->puertas}}-Puertas</td>
                    <td>{{$vehiculo->caja_cambios->tipo}}</td>
                    <td>{{$vehiculo->peso}}</td>
                    {{-- <th><a href="{{route('home')}}" class="btn btn-primary btn-sm">Editar</a></th>
                    <th><a href="{{route('home')}}" class="btn btn-primary btn-sm">Borrar</a></th> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection