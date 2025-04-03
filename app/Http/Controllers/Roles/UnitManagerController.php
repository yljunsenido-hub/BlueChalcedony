<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitManagerController extends Controller
{
    public function index()
    {
        return view('unit_manager.dashboard');
    }
}
