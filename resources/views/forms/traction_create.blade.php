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
    <form action="{{route('traction.store')}}" class="mt-4" method="POST">
        @csrf
        <div class="form-group">
            <label for="nameTraction">Nombre del tipo de traccion</label>
            <input type="text" class="form-control" id="nameTraction" name="nameTraction" placeholder="Delantera, 4x4..." aria-describedby="Marca">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>
@endsection