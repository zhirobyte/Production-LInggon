
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="col text-center">
    <h1 class="m-0 text-dark">Dashboard Admin di folder admin</h1>
</div>
@stop

@section('content')

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  </head>
  <body>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div class="col text-center">
    <a href="/admin/dashboard" class="btn btn-primary">Dashboard</a>

<div class="card-deck" >
<div class="card"style="width: 10rem;">
    <img class="card-img-top" src="{{URL::asset('/image/products.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Menu satu</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="/product" class="btn btn-primary">Product</a>
    </div>
  </div>


  <div class="card" style="width: 10rem;">
    <img class="card-img-top" src="{{URL::asset('/image/users.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Menu Dua</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="/user" class="btn btn-primary">User</a>
    </div>
  </div>


  <div class="card" style="width: 10rem;">
    <img class="card-img-top" src="{{URL::asset('/image/orders.png')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">menu tiga</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="#" class="btn btn-primary">Order</a>
    </div>

  </div>
</div>
     
    
  </body>


@stop
