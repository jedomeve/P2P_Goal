@extends('layouts.main')

@section('title_window')
  Bienvenido
@endsection
@section('body_content')
  @include('layouts.navbar')
    <div class="row m-0 p-4">
          @if(!empty($products))
            <ul>
            @foreach($products as $product)
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="https://assets.adidas.com/images/h_600,f_auto,q_auto:sensitive,fl_lossy/c68970dc89ee4217beb3a83a01259c66_9366/Tenis_X_PLR_Negro_CQ2405_01_standard.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->name  }}</h5>
                    <p class="card-text"> {{ $product->description }} </p>
                    <p class="card-text"> <strong> {{ $product->price  }} </strong> </p>
                    <a href="{{ route('user.buy', ['product' => $product->id ])  }}" class="btn btn-primary"> comprar </a>
                  </div>
                </div>
            @endforeach
            </ul>
          @endif
    </div>
@endsection
