<?php

namespace App\Http\Controllers\Api;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Transformers\CategoryTransformer;

class CategoryController extends Controller
{
    public function show(Categories $category)
  {
  	return $category->all(['id','name as text']);
  	return $category->all()->collection(null,['id','name']);
  
  }
}
