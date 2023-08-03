<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AshrafController extends Controller
{
    function ashraf(int $age = 0)
    {
        $ashraf  = ["Mahim", "Bipu", "Ashraf", "Rasel"];
        return view('ashraf', compact("age", "ashraf"));
    }
}
