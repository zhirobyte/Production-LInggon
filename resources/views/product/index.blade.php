@extends('product.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD with Image Upload sample linggon</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
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
            <td>{{ ++$i }}</td>
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