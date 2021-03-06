@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('bodywork.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de tipos de carroceria</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tipo de carroceria</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carrocerias as $key => $carroceria)
            <form action="{{route('bodywork.delete')}}" method="POST">
                @csrf
                <tr>
                    <input type="text" style="display:none;" name="id" value="{{$carroceria->id}}">
                    <th scope="row">{{$carroceria->id}}</th>
                    <td>{{$carroceria->tipo}}</td>
                    <th>
                        <a href="{{route('bodywork.edit', $carroceria->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                    </th>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>
@endsection