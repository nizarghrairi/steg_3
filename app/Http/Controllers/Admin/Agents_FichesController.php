<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\bon;
use App\Fiche_agents;
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
        $fiche_agents =Fiche_agents::all();
        return view('admin.agent_fiche.index', compact('fiche_agents'));
        /*$agent_fiches = Agent_Fiche::all();
        return view('admin.agent_fiche.index', compact('agent_fiches'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fiche_agents =Fiche_agents::all();
        return view('admin.agent_fiche.create', compact('fiche_agents'));
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

            $ag_f = new Fiche_agents();

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
        $fiche_agents = Fiche_agents::findOrFail($id);
        return view('admin.agent_fiche.edit',compact('fiche_agents'));
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
        $fiche_agents = Fiche_agents::whereId($id)->first();

        $ag_f['matricule']= $request->matricule;
        $ag_f['cnrps']= $request->cnrps;
        $ag_f['nom']= $request->nom;
        $ag_f['prenom']= $request->prenom;
        $ag_f['n_bon']= $request->n_bon;
        $ag_f['date']= $request->date;
        $ag_f['uf']= $request->uf;
        $ag_f['filiere']= $request->filiere;
        $ag_f['type_talon']= $request->type_talon;
        $ag_f['montant']= $request->montant;

        $fiche_agents->update($ag_f);

        return redirect()->route('admin.agent_fiche.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fiche_agents = Fiche_agents::findOrFail($id);
        $fiche_agents->delete();

        return redirect()->route('admin.agent_fiche.index');
    }
}
