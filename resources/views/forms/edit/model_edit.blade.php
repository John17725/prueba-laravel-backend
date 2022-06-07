@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('models.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('models.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$model->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$model->id}}">
        <div class="form-group">
            <label for="nameModel">Nombre del modelo</label>
            <input type="text" class="form-control" id="nameModel" name="nameModel" placeholder="Tsuru, chevy..." aria-describedby="Marca" value="{{$model->modelo}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection