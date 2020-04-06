<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function map()
    {
        return view("maps/map");
    }
}
