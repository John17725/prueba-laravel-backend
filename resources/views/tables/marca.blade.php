@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('marks.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de marcas</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre de la marca</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marks as $key => $mark)
            <form action="{{route('marks.delete')}}" method="POST">
            @csrf
                <tr>
                    <input type="text" style="display:none;" name="id" value="{{$mark->id}}">
                    <th scope="row">{{$mark->id}}</th>
                    <td>{{$mark->nombre}}</td>
                    <th>
                        <a href="{{route('marks.edit', $mark->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                    </th>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>
@endsection