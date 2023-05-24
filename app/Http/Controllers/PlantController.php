<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    function findAll()
    {
        return Plant::get();
    }

    function findBySlug($slug)
    {
        return Plant::where('slug', $slug)->first();
    }
}
