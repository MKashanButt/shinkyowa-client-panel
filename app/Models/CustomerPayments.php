<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayments extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'customer_account',
        'vehicle_name',
        'chassis',
        'c&f',
        'payment_recieved_date',
        'balance',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
        'payment_recieved_date' => 'date',
    ];
}
