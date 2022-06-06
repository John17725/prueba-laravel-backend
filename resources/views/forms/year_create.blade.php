@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('years.list')}}" class="btn btn-primary btn-sm">Volver</a>
    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{route('years.store')}}" class="mt-4" method="POST">
        @csrf
        <div class="form-group">
            <label for="nameYear">Ingresa el año de algun modelo</label>
            <input type="text" class="form-control" id="nameYear" name="nameYear" placeholder="2016, 2018..." aria-describedby="Marca">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>
@endsection