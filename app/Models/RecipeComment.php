<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeComment extends Model
{
    use HasFactory; 

    protected $fillable = [ 
        'recipe_comment', 'user_id', 'recipe_id'
    ];
    public function recipes(){
        return $this->belongsTo(Recipe::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
