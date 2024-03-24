<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'product_name',
        'product_details',
        'user_id',
        'active',
        'price',
        'offer_price',
        'product_photo_path',
        'product_video_path',
        'deleted_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likedByUsers(){
        return $this->belongsToMany(User::class,'post_likes')->using(PostLike::class)->withPivot('rating')->withTimestamps();
    }

    public function sharedToUsers(){
        return $this->belongsToMany(User::class,'post_shares')->using(PostShare::class)->withTimestamps();
    }

    public function wishlistToUsers(){
        return $this->belongsToMany(User::class,'wishlists')->using(Wishlist::class)->withTimestamps();
    }
}
