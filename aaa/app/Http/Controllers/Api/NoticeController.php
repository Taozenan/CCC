<?php

namespace App\Http\Controllers\Api;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Transformers\NoticeTransformer;


class NoticeController extends Controller
{
    public function index(Notice $notice)
  {
    return $this->response->collection($notice::all(), new NoticeTransformer());
  }

  public function show(Request $request)
  {
  	$notice = Notice::find($request->id);
    return $this->response->item($notice, new NoticeTransformer());
  }
}
