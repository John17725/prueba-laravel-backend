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
    <form action="{{route('bodywork.store')}}" class="mt-4" method="POST">
        @csrf
        <div class="form-group">
            <label for="nameCarroceria">Ingresa algun tipo de carroceria</label>
            <input type="text" class="form-control" id="nameCarroceria" name="nameCarroceria" placeholder="Hatchback, Minivan..." aria-describedby="Marca">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>
@endsection