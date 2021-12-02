<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'price_sale',
        'image',
        'images',
        'description',
        'state_id',
        'category_id',
        'color_id',
        'unit_id',
        'quantity',
        'view',
        'sold',
        'rating'
    ];
}
