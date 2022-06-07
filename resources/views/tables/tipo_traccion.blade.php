@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('traction.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de tipos de traccion</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tipo de traccion</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tractions as $key => $traction)
            <form action="{{route('traction.delete')}}" method="POST">
                @csrf
                <tr>
                    <input type="text" style="display:none;" name="id" value="{{$traction->id}}">
                    <th scope="row">{{$traction->id}}</th>
                    <td>{{$traction->tipo}}</td>
                    <th>
                        <a href="{{route('traction.edit', $traction->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                    </th>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>
@endsection