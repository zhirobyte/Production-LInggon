@extends('adminlte::page')

@section('title', 'Laman Order')
  
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
    <form>
          
  <div class="form-row">
  <input type="text" class="form-control" id="inputNama" name="idUser" value=" {{ Auth::user()->id}}" hidden>
  
  <input type="text" class="form-control" id="inputProduct" name="idProduct" value="{{$product->id }}" hidden>

    <div class="form-group col-md-6">
      <label for="inputTelp">No.Telp</label>
      <input type="password" class="form-control" id="inputTelp" placeholder="Telp">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Jumlah</label>
      <input type="number" class="form-control" id="inputJumlah" placeholder="1">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="card-body">
                <h4 class="card-title"><strong>Nama : {{  $product->nama_product }}</strong></h4><br>
                <h5 class="card-title"><strong>Total : Rp. {{ $product->harga_product }}</strong></h5><br>
                <p class="card-text">{{ $product->detail }}</p><br>
            </div>
  </div>
  <div class="card flex-row flex-wrap" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('image/' . $product->image ) }}"  alt="Card image cap">
  </div>
</form>
<a href="{{ url('checkout')}}" type="submit" class="btn btn-primary">CHECKOUT</a>
      
         </div>
    </body>
</html>

@stop
