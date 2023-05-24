<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function findAll()
    {
        return Plant::get();
    }

    public function findBySlug($slug)
    {
        return Plant::where('slug', $slug)->first();
    }
}
