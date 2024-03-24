<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportUser extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'reported_by_id','report_description','active'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
