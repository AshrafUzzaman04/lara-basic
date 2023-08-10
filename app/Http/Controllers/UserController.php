<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ashraf()
    {
        return "My name is Ashraf!";
    }

    public function mahim()
    {
        return view("mahim");
    }

    public function bipu()
    {
        return view("bipu");
    }
}
