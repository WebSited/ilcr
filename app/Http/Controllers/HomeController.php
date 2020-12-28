<?php

namespace App\Http\Controllers;

use App\Team;
use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $team = DB::table('teams')->get();
        $activity = DB::table('activities')->get();
        return view('admin.home', compact('team', 'activity'));
    }
}
