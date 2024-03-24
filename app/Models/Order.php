<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function getStatusAttribute($value)
    {
        $status = '';
        if($value == 1){
            $status = 'processing';
        }
        if($value == 2){
            $status = 'accepted';
        }
        if($value == 3){
            $status = 'cancel';
        }
        if($value == 4){
            $status = 'delivered';
        }
        return $status;
    }
    

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
