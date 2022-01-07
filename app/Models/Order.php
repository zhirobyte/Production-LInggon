<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table ='order';
    protected $fillable = [
  
        //ini dipake buat fillable data yang bisa buat product nya 
        'idProduct',
        'idUser',
        'harga_product_now',
        'jumlah',
        'alamat', 
        'telpon',
    ]; 
}
