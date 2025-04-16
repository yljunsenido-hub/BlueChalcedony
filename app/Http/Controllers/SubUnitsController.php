<?php

namespace App\Http\Controllers;

use App\Models\SubUnit;
use Illuminate\Http\Request;

class SubUnitsController extends Controller
{
    public function getSubUnits($unit_key)
    {
        $subUnits = SubUnit::where('unit_key', $unit_key)->get();
        return response()->json($subUnits);
    }
}
