<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeSlide;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homeSlides = HomeSlide::get();

        return view('site.index', [
            'homeSlides' => $homeSlides
        ]);
    }
}
