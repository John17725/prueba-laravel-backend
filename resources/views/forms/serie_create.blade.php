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
    <form action="{{route('series.store')}}" class="mt-4" method="POST">
        @csrf
        <div class="form-group mt-4">
            <label for="nameCarroceria">Selecciona un tipo de carroceria para esta serie</label>
            <select class="form-select w-50" for="idCarroceria" name="idCarroceria" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($carrocerias as $key => $carroceria)
                    <option value="{{$carroceria->id}}">{{$carroceria->tipo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="numberDoors">Ingresa el numero de puertas (Opcional)</label>
            <input type="text" class="form-control w-50" id="numberDoors" name="numberDoors" placeholder="2, 4..." aria-describedby="Marca">
        </div>
        <div class="form-group mt-4">
            <label for="nameSerie">Ingresa la version de esta serie (Opcional)</label>
            <input type="text" class="form-control w-50" id="nameSerie" name="nameSerie" placeholder="Qubo, Kombi..., Minivan..." aria-describedby="Marca">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>
@endsection