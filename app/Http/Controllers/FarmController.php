<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    function findAll()
    {
        return Farm::get();
    }
}
