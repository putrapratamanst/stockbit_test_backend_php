<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    /**
     * @var Illuminate\Http\Request
     */
    private $params;
    private $api;

    public function __construct(Request $request)
    {
        $this->api     = new ApiController();
        $this->params  = $request->all();
    }

    public function search()
    {
        $validator = Validator::make(
            $this->params,
            Movie::$rules,
        );
        if ($validator->fails())
            throw new Exception(ucwords(implode(' | ', $validator->errors()->all())));

        //hit omdb search
        $data = $this->api->omdbSearch($this->params);
        return response()->json([
            'status'  => "success",
            'code'    => 0,
            'message' => $data['Search'],
        ], Response::HTTP_OK);    
    }

    public function detail($imdbId)
    {
        //hit omdb search
        $data = $this->api->omdbDetail($imdbId);
        return response()->json([
            'status'  => "success",
            'code'    => 0,
            'message' => $data,
        ], Response::HTTP_OK);    
    }
}
