<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAccounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'description',
        'debit',
        'credit',
        'balance',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
