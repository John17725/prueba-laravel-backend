@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('places.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('places.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$place->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$place->id}}">
        <div class="form-group">
            <label for="namePlace">Ingresa el numero de plazas de algún modelo</label>
            <input type="text" class="form-control" id="namePlace" name="namePlace" placeholder="4, 2..." aria-describedby="Marca" value="{{$place->cantidad}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection