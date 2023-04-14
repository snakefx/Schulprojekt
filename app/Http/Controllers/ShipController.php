<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function create()
    {
        return view("shipsink/create");
    }
    public function show()
    {
        return view("shipsink/show");
    }
    public function createLocal()
    {
        return view("shipsink/createLocal");
    }
    public function createLocal2()
    {
        return view("shipsink/createLocal2");
    }
    

}
