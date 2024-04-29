<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'stock_images',
        'stock_id',
        'make',
        'model',
        'year',
        'fob',
        'currency',
        'mileage',
        'engine',
        'doors',
        'transmission',
        'body_type',
        'fuel',
        'category',
        'extras',
        'buy_link',
    ];

    protected $casts = [
        'stock_images' => 'array',
    ];
}
