
@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content')

<form action="{{url('product')}}" method="POST">
@csrf
<div class="container">
    <div class="col text-center">
    <a href="/admin/dashboard" class="btn btn-primary">Dashboard</a>
    </div>
<div class="pull-left">
                <h2>Laman Product Linggon</h2>
            </div>
        <!-- input form buat nama  -->
        <div class="form-group row align-items-center">
                    <label for="inputNamaProduk" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                <input type="text" class="form-control"  style="width:900px;" name="nama_product"  placeholder="nama product">
                </div>
        </div>  
    

         <!-- input form buat harga -->
         <div class="form-group row align-items-center">
                <label for="inputHargaProduct" class="col-sm-2 col-form-label">Harga Product</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="harga_product" placeholder="harga product">
                </div>
            </div>   

              <!-- input form buat stock -->
         <div class="form-group row align-items-center">
                <label for="inputStock" class="col-sm-2 col-form-label">Stock Product</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="stock" placeholder="stock">
                </div>
            </div>   


      <!-- input form buat detail -->
         <div class="form-group row align-items-center">
                <label for="inputDetail" class="col-sm-2 col-form-label">Detail</label>
                <div class="col-sm-10">
                <textarea  type="text" class="form-control" style="width:900px;" name="detail" placeholder="detail"></textarea>
                </div>
          </div>  


     <!-- input form buat penrajina -->
         <div class="form-group row align-items-center">
                <label for="inputAlamat" class="col-sm-2 col-form-label">Pengrajin</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="pengrajin" placeholder="pengrajin">
                </div>
          </div>  
            
     <!-- input form kategori -->
         <div class="form-group row align-items-center">
                <label for="inputCreate" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" style="width:900px;" name="kategori" placeholder="kategori">
                </div>
         </div>  
            
       <!-- input form image -->
         <div class="form-group row align-items-center">
                <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" style="width:900px;" name="image" placeholder="image">
                </div>
        </div>  

        <!-- button save -->
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <button type="submit" class="btn btn-primary btn-lg">Save Data</button>
                </div>
            </div>

          
       
        </div>
     
</form>

@endsection