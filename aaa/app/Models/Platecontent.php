<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platecontent extends Model
{
    protected $fillable = [ 'plate_id',
'category_id',
'title',
'path',
'content',
'is_able',
'rtime'];
}
