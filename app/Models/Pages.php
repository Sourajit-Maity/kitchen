<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function home()
    {
        return $this->hasOne(HomePage::class);
    }

    public function about()
    {
        return $this->hasOne(AboutPage::class);
    }

    public function contact()
    {
        return $this->hasOne(ContactPage::class);
    }


}

