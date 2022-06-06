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
    <form action="{{route('models.store')}}" class="mt-4" method="POST">
        @csrf
        <div class="form-group">
            <label for="nameModel">Nombre del modelo</label>
            <input type="text" class="form-control" id="nameModel" name="nameModel" placeholder="Tsuru, chevy..." aria-describedby="Marca">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>
@endsection