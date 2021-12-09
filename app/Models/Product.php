<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'images',
        'description',
        'category_id',
        'quantity',
        'price',
        'price_sale',
        'color_id',
        'state_id',
        'unit_id',
        'view',
        'sold',
        'rating'
    ];
}
