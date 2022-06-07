@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('gearboxes.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('gearboxes.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$gearbox->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$gearbox->id}}">
        <div class="form-group">
            <label for="nameGearbox">Nombre del tipo de caja de cambios o transmision</label>
            <input type="text" class="form-control" id="nameGearbox" name="nameGearbox" placeholder="DSG, Secuencial..." aria-describedby="Marca" value="{{$gearbox->tipo}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection