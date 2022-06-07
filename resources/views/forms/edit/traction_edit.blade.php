@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('traction.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('traction.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$traction->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$traction->id}}">
        <div class="form-group">
            <label for="nameTraction">Nombre del tipo de traccion</label>
            <input type="text" class="form-control" id="nameTraction" name="nameTraction" placeholder="Delantera, 4x4..." aria-describedby="Marca" value="{{$traction->tipo}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection