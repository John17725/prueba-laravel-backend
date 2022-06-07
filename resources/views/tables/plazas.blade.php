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
            <form action="{{route('places.delete')}}" method="POST">
                @csrf
                <tr>
                    <input type="text" style="display:none;" name="id" value="{{$place->id}}">
                    <th scope="row">{{$place->id}}</th>
                    <td>{{$place->cantidad}} Plazas</td>
                    <th>
                        <a href="{{route('places.edit',$place->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                    </th>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>
@endsection