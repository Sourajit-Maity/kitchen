<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'recipe_name',
        'recipe_description',
        'recipe_category_id',
        'added_by_id',
        'recipe_video_path',
        'active',
        'deleted_at',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'added_by_id');
    }

    public function recipecategories(){
        return $this->belongsTo(RecipeCategory::class,'recipe_category_id');
    }

    public function reciperatings(){
        return $this->hasMany(RecipeRating::class);
    }

    public function recipecomments(){
        return $this->hasMany(RecipeComment::class);
    }

    public function likedrecipeByUsers(){
        return $this->belongsToMany(User::class,'recipe_likes')->using(RecipeLike::class)->withPivot('rating')->withTimestamps();
    }

    public function sharedrecipeToUsers(){
        return $this->belongsToMany(User::class,'recipe_shares')->using(RecipeShare::class)->withTimestamps();
    }

    public function wishlistrecipeToUsers(){
        return $this->belongsToMany(User::class,'recipe_wishlists')->using(RecipeWishlist::class)->withTimestamps();
    }
}
