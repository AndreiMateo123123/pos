<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['description', 'price', 'category', 'size', 'status' ,'barcode' , 'product_image'];
    public $timestamps = false;
}
