@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('motors.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de tipos de motor</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tipo de combustible consumido</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($motors as $key => $motor)
            <form action="{{route('motors.delete')}}" method="POST">
                @csrf
                <tr>
                    <input type="text" style="display:none;" name="id" value="{{$motor->id}}">
                    <th scope="row">{{$motor->id}}</th>
                    <td>{{$motor->combustible}}</td>
                    <th>
                        <a href="{{route('motors.edit', $motor->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                    </th>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>
@endsection