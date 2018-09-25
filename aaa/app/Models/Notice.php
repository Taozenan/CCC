<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
     protected $fillable = [
        
        'title',
        'content',
        'is_top',
        'is_able',
        'rtime',
        'cread_at',
        'update_at',
        
    ];
}
