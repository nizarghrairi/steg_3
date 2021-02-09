<?php

namespace App\Http\Controllers\Admin;

use App\bon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agent_Fiche;

class Agents_FichesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent_fiches = Agent_Fiche::all();
        return view('admin.agent_fiche.index', compact('agent_fiches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agent_fiche.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request ->isMethod('post')){
            $this->validate($request,[

                'matricule' =>"required",
                'cnrps'     =>"required",
                'nom'       =>"required",
                'prenom'    =>"required",
                'n_bon'     =>"required",
                'date'      =>"required",
                'uf'        =>"required",
                'filiere'   =>"required",
                'type_talon'=>"required",
                'montant'   =>"required"
            ]);

            $ag_f = new Agent_Fiche();

            $ag_f->matricule  = $request->input('matricule');
            $ag_f->cnrps      = $request->input('cnrps');
            $ag_f->nom        = $request->input('nom');
            $ag_f->prenom     = $request->input('prenom');
            $ag_f->n_bon      = $request->input('n_bon');
            $ag_f->date       = $request->input('date');
            $ag_f->uf         = $request->input('uf');
            $ag_f->filiere    = $request->input('filiere');
            $ag_f->type_talon = $request->input('type_talon');
            $ag_f->montant    = $request->input('montant');
            $ag_f->save();
        }
        return redirect()->route('admin.agent_fiche.index');
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
