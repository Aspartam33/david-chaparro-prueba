@extends('layouts.layout')
@section('title','Prueba David Chaparro')
@section('content')
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="fw-light">Prueba de carga masiva en laravel</h1>
        <p class="lead">Elaborado por David Chaparro</p>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h2 class="fw-light">Instrucciones</h2>
    <p>Para realizar la carga de prueba registrate en el siguente link en el sigueinte link <a href="{{ route('register') }}">Registrar</a></p>
  </div>
</section>
@endsection