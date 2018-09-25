<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companyprofile extends Model
{
	protected $fillable = [
    'path',
'name',
'profile',
'case',
'productdescription',
'is_able',
'address',
'telephone',
'email'
      ];
}
