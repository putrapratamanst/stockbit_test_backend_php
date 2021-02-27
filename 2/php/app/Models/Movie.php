<?php

namespace App\Models;

class Movie
{
    public static $rules = [
        'pagination'  => 'required|integer',
        'searchword'  => 'required|string',
    ];

    public $timestamp = false;
}
