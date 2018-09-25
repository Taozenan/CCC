<?php

namespace App\Http\Controllers\Api;

use App\Models\Rotation;
use Illuminate\Http\Request;
use App\Transformers\ImageTransformer;
use App\Transformers\RotationsTransformer;

class RotationController extends Controller
{
   public function index(Rotation $rotation)
 {
    return $this->response->collection($rotation::all(), new RotationsTransformer());
  }
  public function show(Request $request)
  {
    $rotation = Rotation::find($request->id);
    return $this->response->item($rotation, new RotationsTransformer());
  }
}
