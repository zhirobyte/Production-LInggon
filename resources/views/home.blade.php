@extends('adminlte::page')

@section('title', 'Laman User')
  
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

    <div class="card bg-dark text-black">
        <img src="assets/img/welcome.png" class="img-fluid" alt="Responsive image">
        <div class="card-img-overlay">
            <h1 class="card-title"><strong>Linggon Store</h1>
            <p class="card-text"><h2><strong>Proud to be indonesia! <br>Linggon adalah produk asli indonesia<strong></h2></p>
            <p class="card-text"><strong>January 2022<strong></p>
        </div>
        </div>
        <marquee><h2>Welcome to Linggon Indonesia</h2></marquee>
        
  <div class="card-deck">
         @foreach ($dataproduct as $dataproduct)
         <div class="card">
            <img class="card-img-top" src="{{ asset('image/' . $dataproduct->image ) }}"  alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title" style="color:#808080";><strong>{{ $dataproduct->nama_product }}</strong></h4><br>
                <h5 class="card-title"  style="color:#808080"; ><strong> Rp. {{ $dataproduct->harga_product }}</strong></h5><br>
                <p class="card-text" style="color:#A9A9A9"; >{{ $dataproduct->detail }}</p><br>
                <div class="text-center">
                <a href="{{ url('order/' . $dataproduct->id ) }}" class="btn btn-primary">BUY NOW</a>
            </div>
            </div>
            </div>
        @endforeach
        <br>
    </div>

    <div class="col text-center">
    <a href="/order/checkout" class="btn btn-primary">Order Test</a>
    </div>

    
    </body>
</html>

@stop
