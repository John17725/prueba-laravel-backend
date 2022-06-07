@extends('layouts.app')
@section('content')
<div class="container">
    <div class="md-4">
        <a href="{{route('home')}}" class="btn btn-primary btn-sm">Volver al panel principal</a>
        <a href="{{route('gearboxes.create')}}" class="btn btn btn-success btn-sm">Crear nuevo</a>
    </div>
    <table class="table mt-4">
        <caption>Tabla de tipo de caja de cambios/transmision</caption>
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Tipo de caja</th>
            <th scope="col text-center" colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gearboxes as $key => $gearbox)
            <form action="{{route('gearboxes.delete')}}" method="POST">
                @csrf
                <tr>
                    <input type="text" style="display:none;" name="id" value="{{$gearbox->id}}">
                    <th scope="row">{{$gearbox->id}}</th>
                    <td>{{$gearbox->tipo}}</td>
                    <th>
                        <a href="{{route('gearboxes.edit', $gearbox->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <button type="submit" class="btn btn-primary btn-sm">Borrar</button>
                    </th>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>
</div>
@endsection