<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeCategory extends Model
{
    use HasFactory,SoftDeletes; 

    protected $fillable = [
        'recipe_category',
        'active',
        'deleted_at',
    ];

    public function recipies()
    {
        return $this->hasMany(Recipe::class);
    }
}
