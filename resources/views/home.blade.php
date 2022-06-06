@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h4>Bienvenido {{\Auth::user()->name}}</h4>
                        <p class="text-left">Dentro del panel encontraras una lista de los vehiculos existentes en el sistema y podras interactuar con ellos, creando, editando, y eliminando registros</p>
                        <div class="card-body">
                            <div class="card-item mt-4">
                                <label>Tabla general de vehiculos</label>
                                <a href="{{route('vehicles.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla de marcas de vehiculos</label>
                                <a href="{{route('marks.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla modelos de vehiculos</label>
                                <a href="{{route('models.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla tipos de motores</label>
                                <a href="{{route('motors.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla de tipo de traccion</label>
                                <a href="{{route('traction.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla modelos de años de vehiculos</label>
                                <a href="{{route('years.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla de numeros de plazas de vehiculos</label>
                                <a href="{{route('places.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla modelos de carrocerias de vehiculos</label>
                                <a href="{{route('bodywork.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla modelos de cajas de cambios/transmisiones</label>
                                <a href="{{route('gearboxes.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                            <div class="card-item mt-4">
                                <label>Tabla de series de vehiculo</label>
                                <a href="{{route('series.list')}}" class="btn btn-primary btn-sm">Ver tabla</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
