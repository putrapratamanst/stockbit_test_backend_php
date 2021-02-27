<?php

namespace App\Http\Controllers;

use App\Traits\LogTrait;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    use LogTrait;

    public function omdbSearch($param)
    {
        $endpoint = env('OMDBURL')."?apikey=".env('OMDBKEY')."&s={$param['searchword']}&page={$param['pagination']}";
        $api      = Http::get($endpoint);
        $response = $api->json();
        $this->saveLog([
            'url'      => $endpoint,
            'response' => serialize($response),
        ]);
        return $response;
    }
}
