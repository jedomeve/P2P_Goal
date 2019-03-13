@extends('layouts.main')

@section('title_window')
  Bienvenido
@endsection
@section('class_container')
  bg-image-principal
@endsection
@section('body_content')
  <div class="p-0 m-0 app_container_overlay bg-overlay d-flex align-items-center justify-content-center">
    <div class="login_container py-2 px-3 rounded d-flex flex-column align-items-center">
          <i class="fas fa-user-circle fa-3x my-2"></i>
          <h4 class="text-center"> ¡Bienvenido User! </h4>
          <p class="text-center">¡Continua para vivir la mejor experiencia en compras online!</p>
          <a href="{{ route('user.home') }}" class="btn btn-success my-2 mx-4"> <i class="fas fa-sign-in-alt"></i> ¡empieza a comprar! </a>
    </div>
  </div>
@endsection
