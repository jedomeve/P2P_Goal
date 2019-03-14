
@extends('layouts.main')

@section('title_window')
    Bienvenido
@endsection
@section('body_content')
    @include('layouts.navbar')
    <div class="row m-0 p-4">
        <div class="container">
            Detalles de compra
            <hr>
            <form id="form-buy" method="post" action="{{route('p2p.dataPayment')}}">
                @csrf
                <fieldset>
                    <legend class="font-weight-bold my-2">Producto</legend>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Producto</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext"
                                   id="staticEmail" value="{{ $product->name  }}">
                            <input type="hidden" name="product_id" value="{{ $product->id  }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
                        <div class="col-sm-10">
                            <input type="currency"
                                   readonly class="form-control-plaintext" id="staticEmail"
                                   name="price" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Cantidad</label>
                        <div class="col-sm-10">
                            <input type="number" readonly class="form-control-plaintext"
                                   name="cant"
                                   disabled value="1">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="font-weight-bold my-2">Datos del comprador</legend>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">CC.</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="cc" id="cc" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombres</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="lastname" id="lastname" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" type="text" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="phone" id="phone" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" type="text" class="col-sm-2 col-form-label">Pais</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" name="country" id="country" value="Colombia">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" type="text" class="col-sm-2 col-form-label">Ciudad</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="city" id="city" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" type="text" class="col-sm-2 col-form-label">Calle</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="street" id="street" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-large btn-success mx-auto my-2"> <i class="fas fa-credit-card"></i> Pagar  </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
