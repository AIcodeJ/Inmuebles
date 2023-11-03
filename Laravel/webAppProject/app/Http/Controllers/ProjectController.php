<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // THIS IS A METHOD OF THE CLASS
    public function __invoke() //just for one route, this is a method called __invoke
    {
        // return view('welcome');
        return view("index");
    }
}
