<?php

namespace App\Http\Controllers;

use App\Models\Bike;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::where('status', 'available')
            ->orderBy('model')
            ->get();

        return view('dashboard', compact('bikes'));
    }
}