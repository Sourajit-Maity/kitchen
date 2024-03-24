<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeRating extends Model
{
    use HasFactory; 
    protected $fillable = ['user_id', 'recipe_id','rating'];

    public function recipes(){
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
