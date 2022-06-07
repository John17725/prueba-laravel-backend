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
                <th class="text-center" scope="col">VIN</th>
                <th class="text-center" scope="col">Marca</th>
                <th class="text-center" scope="col">Modelo</th>
                <th class="text-center" scope="col">Tipo de motor</th>
                <th class="text-center" scope="col">Tipo de traccion</th>
                <th class="text-center" scope="col">Año del vehiculo</th>
                <th class="text-center" scope="col">Serie del vehiculo</th>
                <th class="text-center" scope="col">Tipo de caja de cambios</th>
                <th class="text-center" scope="col">Peso en orden de marcha</th>
                <th class="text-center" scope="col text-center" >Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $key => $vehiculo)
            <form action="{{route('vehicles.delete')}}" method="POST">
                @csrf
                <tr>
                    <input type="text" style="display:none;" name="id" value="{{$vehiculo->id}}">
                    <th class="text-center" scope="row">{{$vehiculo->id}}</th>
                    <td class="text-center">{{$vehiculo->marca->nombre}}</td>
                    <td class="text-center">{{$vehiculo->modelo->modelo}}</td>
                    <td class="text-center">{{$vehiculo->motor->combustible}}</td>
                    <td class="text-center">{{$vehiculo->traccion->tipo}}</td>
                    <td class="text-center">{{$vehiculo->year_vehicle->year}}</td>
                    <td class="text-center">{{$vehiculo->serie->Carroceria->tipo}} {{$vehiculo->serie->Carroceria->tipo}} {{$vehiculo->serie->puertas}}-Puertas</td>
                    <td class="text-center">{{$vehiculo->caja_cambios->tipo}}</td>
                    <td class="text-center">{{$vehiculo->peso}}</td>
                    <th>
                        <a href="{{route('vehicles.edit',$vehiculo->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                    </th>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!!$vehicles->links()!!}
    </div>
    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination">
        </ul>
      </nav> --}}
</div>
@endsection