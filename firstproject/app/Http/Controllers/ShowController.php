<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{

    public function show($planetName)
    {
        $planet =  Planet::Where('name', $planetName)->first();

        if (!$planet) {
            return redirect('/planeten');
        }
        return view('welcome', ['planet' => $planet]);
    }

    public function index()
    {
        $planets = Planet::all();
        return view('index', ['planets' => $planets]);
    }
}
