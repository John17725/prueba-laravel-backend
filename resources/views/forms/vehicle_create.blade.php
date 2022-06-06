@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('vehicles.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <h1 class="mt-4">Registro general de nuevos vehiculos</h1>
    <p class=" disabled">Si no encuentra algun registro en particular puede volver al panel general y registrar el item que desee, y despues volver a realizar el registro del vehiculo</p>
    <form action="{{route('vehicles.store')}}" class="mt-4" method="POST">
        @csrf
        <div class="form-group mt-4">
            <label for="idMarca">Selecciona la Marca</label>
            <select class="form-select w-50" for="idMarca" name="idMarca" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($marcas as $key=>$marca )
                    <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idModel">Selecciona el modelo</label>
            <select class="form-select w-50" for="idModel" name="idModel" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($modelos as $key=>$model )
                    <option value="{{$model->id}}">{{$model->modelo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idMotor">Selecciona el tipo de motor</label>
            <select class="form-select w-50" for="idMotor" name="idMotor" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($motores as $key=>$motor )
                    <option value="{{$motor->id}}">{{$motor->combustible}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idTraction">Selecciona el tipo de traccion</label>
            <select class="form-select w-50" for="idTraction" name="idTraction" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($tracciones as $key=>$traccion )
                    <option value="{{$traccion->id}}">{{$traccion->tipo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idYear">Selecciona año del vehiculo</label>
            <select class="form-select w-50" for="idYear" name="idYear" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($years as $key=>$year )
                    <option value="{{$year->id}}">{{$year->year}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idSerie">Seleccion la serie del vehiculo</label>
            <select class="form-select w-50" for="idSerie" name="idSerie" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($series as $key=>$serie )
                    <option value="{{$serie->id}}">{{$serie->Carroceria->tipo}} {{$serie->puertas}} {{$serie->version}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idGearbox">Selecciona el tipo de caja de cambios</label>
            <select class="form-select w-50" for="idGearbox" name="idGearbox" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($gearboxes as $key=>$gearbox )
                    <option value="{{$gearbox->id}}">{{$gearbox->tipo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idPlaces">Selecciona el numero de plazas</label>
            <select class="form-select w-50" for="idPlaces" name="idPlaces" aria-label="Default select example">
                <option value="">---</option>
                @foreach ($plazas as $key=>$plaza )
                    <option value="{{$plaza->id}}">{{$plaza->cantidad}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="namePeso">Ingresa el peso en marcha (este debera ser ingresado en KG)</label>
            <input type="text" class="form-control" id="namePeso" name="namePeso" placeholder="1055, 980..." aria-describedby="Marca">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>
@endsection