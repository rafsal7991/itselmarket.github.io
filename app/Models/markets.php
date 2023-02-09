<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class markets extends Model
{
    use HasFactory;

    protected $table = "markets";
    protected $fillable = [
        'product_name',
        'location',
        'customer_name', 
        'units',      
    ];
}
