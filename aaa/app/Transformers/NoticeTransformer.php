<?php

namespace App\Transformers;

use App\Models\Notice;
use League\Fractal\TransformerAbstract;

class NoticeTransformer extends TransformerAbstract
{
    public function transform(Notice $notice)
    {
        return [   
            'id'=>$notice->id,
            'title' => $notice->title,            
            'content' => $notice->body,
            'rtime' => $notice->rtime,
            'is_able'=>$notice->is_able,
            'is_top'=>$notice->is_top,
        ];
    }
}