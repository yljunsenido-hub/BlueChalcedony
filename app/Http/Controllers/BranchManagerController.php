<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchManagerController extends Controller
{
    public function index()
    {
        return view('branch_manager.dashboard');
    }
}
