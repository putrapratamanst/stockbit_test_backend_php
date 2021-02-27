<?php

namespace App\Traits;

use App\Models\Log;
use Illuminate\Support\Carbon;

trait LogTrait
{
    public static function saveLog($param)
    {
        $model              = new Log();
        $model->url         = $param['url'];
        $model->response    = $param['response'];
        $model->created_at  = Carbon::now();
        $model->save();
    }
}
