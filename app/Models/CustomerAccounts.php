<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAccounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_name',
        'chassis',
        'total_cnf',
        'customer_name',
        'customer_email',
        'payment_recieved',
    ];

    protected $casts = [
        'payment_recieved' => 'date'
    ];
}
