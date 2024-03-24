<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $fillable = [
        'cms_id',
        'banner_heading',
        'banner_sub_heading',
        'banner_content',
        'banner_image',
        'content1_heading',
        'content1_text',
        'content1_image',
        'content2_heading',
        'content2_text',
        'content2_image',
        'content3_heading',
        'content3_text',
        'content3_image',
        'content4_heading',
        'content4_text',
        'content4_image'
    ];
}
