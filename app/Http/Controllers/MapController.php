<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function map()
    {
        $colors = DB::table('colors')->select()->orderBy('id', 'desc')->get();
        $count = DB::table('colors')->count();
        $cnt = 39 - $count;

        return view("maps/map")->with([
            'colors' => $colors,
            'cnt' => $cnt
        ]);
    }
}
