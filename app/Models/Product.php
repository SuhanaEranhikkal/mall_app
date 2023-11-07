<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 // or a higher value as needed

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable=['shop_name','product_name','category','price','option','owner_id'];
}
