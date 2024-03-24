<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqMaster extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'faq_question',
        'faq_answer',
        'active',
        'deleted_at',
    ];
}
