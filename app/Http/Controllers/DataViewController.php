<?php

namespace App\Http\Controllers;

use App\Services\DataCollectorService;
use Illuminate\Http\Request;

class DataViewController extends Controller
{
    //
    public function index(DataCollectorService $data)
    {
        $string = $data->test();
        return $string;
    }
}
