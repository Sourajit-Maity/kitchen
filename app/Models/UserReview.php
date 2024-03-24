<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    use HasFactory;
    protected $with=['user'];
    protected $fillable = [ 
        'user_id', 'added_by_id', 'review','rating'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
