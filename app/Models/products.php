<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'product_name',
        'product_location',
        'seller_name',
        'font_side_image',
        'back_side_image',
        'other_side_image',
     
    ];

}
