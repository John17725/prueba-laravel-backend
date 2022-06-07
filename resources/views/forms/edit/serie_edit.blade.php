@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('series.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('series.update')}}" class="mt-4" method="POST">
        @csrf
        <h3 class="text-center">Actualizacion de datos registro {{$serie->id}}</h3>
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$serie->id}}">
        <div class="form-group mt-4">
            <label for="nameCarroceria">Selecciona un tipo de carroceria para esta serie</label>
            <select class="form-select w-50" for="idCarroceria" name="idCarroceria" aria-label="Default select example">
                @foreach ($carrocerias as $key => $carroceria)
                    @if ($carroceria->id == $serie->id)
                        <option selected value="{{$carroceria->id}}">{{$carroceria->tipo}}</option>
                    @else
                        <option value="{{$carroceria->id}}">{{$carroceria->tipo}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="numberDoors">Ingresa el numero de puertas (Opcional)</label>
            <input type="text" class="form-control w-50" id="numberDoors" name="numberDoors" placeholder="2, 4..." aria-describedby="Marca" value="{{$serie->puertas}}">
        </div>
        <div class="form-group mt-4">
            <label for="nameSerie">Ingresa la version de esta serie (Opcional)</label>
            <input type="text" class="form-control w-50" id="nameSerie" name="nameSerie" placeholder="Qubo, Kombi..., Minivan..." aria-describedby="Marca" value="{{$serie->version}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection