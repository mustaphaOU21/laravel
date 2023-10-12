<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    private $planets;

    public function __construct()
    {
        $this->planets = [
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
            ]
        ];
    }
    public function show($planetName)
    {
        $planetName = collect($this->planets)->firstWhere('name', $planetName);

        if (!$planetName) {
            return redirect('/planeten');
        }

        return view('welcome', ['planet' => $planetName]);
    }

    public function index()
    {
        return view('index', ['planets' => $this->planets]);
    }
}
