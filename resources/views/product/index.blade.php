
@extends('adminlte::page')

@section('title', 'AdminLTE')
     
@section('content')
    <div class="row">
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>Laman Product Linggon</h2>
            </div>
            <div class="pull-center">
                <a class="btn btn-success" href="/product/create"> Create New Product</a>
                <a href="/admin/dashboard" class="btn btn-primary">Dashboard</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Details</th>
            <th>Pengrajin</th>
            <th>Kategori</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($product as $product)
        <tr>

            <td>{{ $product->nama_product }}</td>
            <td>{{ $product->harga_product }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->pengrajin }}</td>
            <td>{{ $product->kategori }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>
                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    

@endsection