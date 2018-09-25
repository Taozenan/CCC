<?php

namespace App\Transformers;

use App\Models\Rotation;
use League\Fractal\TransformerAbstract;

class RotationsTransformer extends TransformerAbstract
{
    public function transform(Rotation $rotation)
    {
        return [
            'id' => $rotation->id,
            'path'=>$rotation->path,
            'url'=>$rotation->url,
            
           
        ];
    }
}