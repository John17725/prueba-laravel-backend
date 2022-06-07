@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('marks.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('marks.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$mark->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$mark->id}}">
        <div class="form-group">
            <label for="nameMark">Nombre de la marca</label>
            <input type="text" class="form-control" id="nameMark" name="nameMark" placeholder="Nissan, Chevrolet..." aria-describedby="Marca" value="{{$mark->nombre}}">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>
@endsection