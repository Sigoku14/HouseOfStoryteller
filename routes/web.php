<?php

use Illuminate\Support\Facades\Route;

Route::get("/", "MapController@index");
Route::get("/map", "MapController@map");
