<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $rating = collect([]);
        foreach (\App\User::all() as $user) {
           $rating->push(collect(['name'=>$user->name,'points'=>$user->tasks->sum('points')]));
        }
        
        return view('home',[
            'works' => \App\Work::orderBy('created_at','desc')->paginate(10),
            'rating' => $rating->sortByDesc('points')->values()->all()
        ]);
    }
}
