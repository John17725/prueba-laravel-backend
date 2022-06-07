@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('bodywork.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('bodywork.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$bodywork->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$bodywork->id}}">
        <div class="form-group">
            <label for="nameCarroceria">Ingresa algun tipo de carroceria</label>
            <input type="text" class="form-control" id="nameCarroceria" name="nameCarroceria" placeholder="Hatchback, Minivan..." aria-describedby="Marca" value="{{$bodywork->tipo}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection