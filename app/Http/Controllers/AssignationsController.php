<?php

namespace Ecooperative\Http\Controllers;

use Illuminate\Http\Request;
use Ecooperative\Planteur;
use Ecooperative\Acheteur;
use Ecooperative\Assignation;
use Ecooperative\Http\Resources\Assignation as AssignationResource;

class AssignationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignationss = Assignation::all('planteurs_id','acheteurs_id','id', 'created_at');
        $assignationss = collect($assignationss);
        // $assignationss = $assignationss->sortByDesc('created_at');
        // return $assignationss;
        foreach($assignationss as $assignations)
        {
            $planteur = Planteur::find($assignations->planteurs_id);
            $acheteur = Acheteur::find($assignations->acheteurs_id);
            array_pull($assignations, 'planteurs_id');
            array_pull($assignations, 'acheteurs_id');
            array_add($assignations,'planteurs_id',$planteur);
            // array_add($assignations,'acheteurs_id',$acheteur);
        }
        return new AssignationResource($assignationss);
        // return compact('assignationss');
        // return view('assignations.index', ['assignationss'=>$assignationss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planteurs = Planteur::All('id','nomc');
        $acheteurs = Acheteur::All('id','nomc');
        $planteurs = array_pluck($planteurs, 'nomc','id');
        $acheteurs = array_pluck($acheteurs, 'nomc','id');
        // $planteurs = compact('planteurs');
        // $acheteurs = compact('acheterus');
        return view('assignations.create', ['planteurs'=>$planteurs,'acheteurs'=>$acheteurs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'planteurs_id'=>'numeric',
            'acheteurs_id'=>'numeric'
        ]);
        
        Assignation::create($request->all());
        return redirect('/assignations')->with('status', 'Assignation faites avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
