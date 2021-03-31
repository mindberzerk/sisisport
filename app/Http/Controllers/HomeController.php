<?php

namespace App\Http\Controllers;

use App\Models\Nowplaying;
use App\Models\Topteams;
use App\Models\Tournaments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nowplayings = Nowplaying::all()->sortByDesc('league')->take(5);
        /*dd($nowplayings);*/


        $tournaments = Tournaments::all()->take(5);
        $topteams = Topteams::all()->take(5);

        return view('/home', compact('nowplayings', 'tournaments', 'topteams'));

        /*return view('home');*/
    }
}
