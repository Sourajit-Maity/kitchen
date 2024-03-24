<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'city_name',
        'state_id',
        'active',
    ];

    public function cities()
    {
         return $this->belongsTo(State::class, 'state_id');
    }

}
