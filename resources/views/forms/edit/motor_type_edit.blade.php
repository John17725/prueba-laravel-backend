@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('motors.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('motors.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$motor->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$motor->id}}">
        <div class="form-group">
            <label for="nameMotor">Nombre del combustible usado</label>
            <input type="text" class="form-control" id="nameMotor" name="nameMotor" placeholder="Gas, carbon..." aria-describedby="Marca" value="{{$motor->combustible}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection