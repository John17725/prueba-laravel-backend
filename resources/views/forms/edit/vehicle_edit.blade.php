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
    <h3 class="text-center">Actualizacion de datos registro {{$vehicle->id}}</h3>
    <p class=" disabled">Si no encuentra algun registro en particular puede volver al panel general y registrar el item que desee, y despues volver a realizar el registro del vehiculo</p>
    <form action="{{route('vehicles.update')}}" class="mt-4" method="POST">
        @csrf
        <input type="text" style="display: none" class="form-control w-50" id="id" name="id"value="{{$vehicle->id}}">
        <div class="form-group mt-4">
            <label for="idMarca">Selecciona la Marca</label>
            <select class="form-select w-50" for="idMarca" name="idMarca" aria-label="Default select example">
                @foreach ($marcas as $key=>$marca )
                    @if ($marca->id == $vehicle->marca_id)
                        <option selected value="{{$marca->id}}">{{$marca->nombre}}</option>
                    @else
                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idModel">Selecciona el modelo</label>
            <select class="form-select w-50" for="idModel" name="idModel" aria-label="Default select example">
                @foreach ($modelos as $key=>$model )
                    @if ($model->id == $vehicle->modelo_id)
                        <option selected value="{{$model->id}}">{{$model->modelo}}</option>
                    @else
                        <option value="{{$model->id}}">{{$model->modelo}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idMotor">Selecciona el tipo de motor</label>
            <select class="form-select w-50" for="idMotor" name="idMotor" aria-label="Default select example">
                
                @foreach ($motores as $key=>$motor )
                    @if ($motor->id == $vehicle->motor_id)
                        <option selected value="{{$motor->id}}">{{$motor->combustible}}</option>
                    @else
                        <option value="{{$motor->id}}">{{$motor->combustible}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idTraction">Selecciona el tipo de traccion</label>
            <select class="form-select w-50" for="idTraction" name="idTraction" aria-label="Default select example">
                
                @foreach ($tracciones as $key=>$traccion )
                    @if ($traccion->id == $vehicle->traccion_id)
                        <option selected value="{{$traccion->id}}">{{$traccion->tipo}}</option>
                    @else
                        <option value="{{$traccion->id}}">{{$traccion->tipo}}</option>  
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idYear">Selecciona año del vehiculo</label>
            <select class="form-select w-50" for="idYear" name="idYear" aria-label="Default select example">
                
                @foreach ($years as $key=>$year )
                    @if ($year->id == $vehicle->year_vehicle_id)
                        <option selected value="{{$year->id}}">{{$year->year}}</option>
                    @else
                        <option value="{{$year->id}}">{{$year->year}}</option> 
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idSerie">Seleccion la serie del vehiculo</label>
            <select class="form-select w-50" for="idSerie" name="idSerie" aria-label="Default select example">
                @foreach ($series as $key=>$serie )
                    @if ($serie->id == $vehicle->serie_id)
                        <option selected value="{{$serie->id}}">{{$serie->Carroceria->tipo}} {{$serie->puertas}} {{$serie->version}}</option>
                    @else
                        <option value="{{$serie->id}}">{{$serie->Carroceria->tipo}} {{$serie->puertas}} {{$serie->version}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idGearbox">Selecciona el tipo de caja de cambios</label>
            <select class="form-select w-50" for="idGearbox" name="idGearbox" aria-label="Default select example">
                @foreach ($gearboxes as $key=>$gearbox )
                    @if ($gearbox->id == $vehicle->caja_cambios_id)
                        <option selected value="{{$gearbox->id}}">{{$gearbox->tipo}}</option>
                    @else
                        <option value="{{$gearbox->id}}">{{$gearbox->tipo}}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <label for="idPlaces">Selecciona el numero de plazas</label>
            <select class="form-select w-50" for="idPlaces" name="idPlaces" aria-label="Default select example">
                @foreach ($plazas as $key=>$plaza )
                    @if ($plaza->id == $vehicle->plazas_id)
                        <option value="{{$plaza->id}}">{{$plaza->cantidad}}</option>
                    @else
                        <option value="{{$plaza->id}}">{{$plaza->cantidad}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="namePeso">Ingresa el peso en marcha (este debera ser ingresado en KG)</label>
            <input type="text" class="form-control" id="namePeso" name="namePeso" placeholder="1055, 980..." aria-describedby="Marca" value="{{$vehicle->peso}}">
        </div>
        <button type="submit" class="btn btn-warning mt-4">Actualizar</button>
    </form>
</div>
@endsection