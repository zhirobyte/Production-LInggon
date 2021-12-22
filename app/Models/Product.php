<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $fillable = [

        //ini dipake buat fillable data yang bisa buat product nya 
        'nama_product',
        'harga_product',
        'stock',
        'detail',
        'pengrajin', 
        'kategori' ,
        'image' ,
        

    ]; 
}
