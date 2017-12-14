<?php

namespace Ecooperative\Http\Controllers;

use Illuminate\Http\Request;
use Ecooperative\Planteur;
use Ecooperative\Acheteur;
use Ecooperative\Assignation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignationss = Assignation::all('planteurs_id','acheteurs_id','id', 'created_at');
        $assignationss = collect($assignationss);
        $assignationss = $assignationss->sortByDesc('created_at');
        foreach($assignationss as $assignations)
        {
            $planteur = Planteur::find($assignations->planteurs_id);
            $acheteur = Acheteur::find($assignations->acheteurs_id);
            array_pull($assignations, 'planteurs_id');
            array_pull($assignations, 'acheteurs_id');
            array_add($assignations,'planteurs_id',$planteur);
            array_add($assignations,'acheteurs_id',$acheteur);
        }
        // return $assignationss;
        // return compact('assignationss');
        return view('home', ['assignationss'=>$assignationss]);
        // return view('home');
    }
}
