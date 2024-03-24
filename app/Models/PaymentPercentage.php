<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPercentage extends Model
{
    use HasFactory; 
    protected $fillable = [
        'payment_name',
        'payment_percentage',
        'active',
        'deleted_at',
    ];
}
