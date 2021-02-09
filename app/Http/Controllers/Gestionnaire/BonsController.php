<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Agent;
use App\bon;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class BonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bons = bon::all();
        $agents = Agent::all();
        $bons = bon::orderBy('id','asc')->paginate(5);
        return view('gestionnaire.bons.index', compact('bons','agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bons = Bon::all();
        return view('gestionnaire.bons.create',compact('bons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){

            $this->validate($request, [
                'n_engistrement'    =>"required",
                'matricule'         =>"required",
                'cnrps'             =>"required",
                'nom'               =>"required",
                'prenom'            =>"required",
                'n_bon'             =>"required",
                'date'              =>"required",
                'uf'                =>"required",
                'cote_par_agent'    =>"required",
                'type_acte'         =>"required",
                'cv_ce'             =>"required",
                'montant'           =>"required"
            ]);

            $bon = new Bon();
            $bon -> n_engistrement =$request->input('n_engistrement');
            $bon -> matricule      =$request->input('matricule');
            $bon -> cnrps          =$request->input('cnrps');
            $bon -> nom            =$request->input('nom');
            $bon -> prenom         =$request->input('prenom');
            $bon -> n_bon          =$request->input('n_bon');
            $bon -> date           =$request->input('date');
            $bon -> uf             =$request->input('uf');
            $bon -> cote_par_agent =$request->input('cote_par_agent');
            $bon -> type_acte      =$request->input('type_acte');
            $bon -> cv_ce          =$request->input('cv_ce');
            $bon -> montant        =$request->input('montant');
            $bon->save();
        }
        return redirect()->route('gest.bons.index');
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
        $bon = bon::findOrFail($id);
        return view('gestionnaire.bons.edit',compact('bon'));
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
        $bon = bon::whereId($id)->first();

        $bn['n_engistrement'] = $request->n_engistrement;
        $bn['matricule'] = $request->matricule;
        $bn['cnrps'] = $request->cnrps;
        $bn['nom'] = $request->nom;
        $bn['prenom'] = $request->prenom;
        $bn['n_bon'] = $request->n_bon;
        $bn['date'] = $request->date;
        $bn['uf'] = $request->uf;
        $bn['cote_par_agent'] = $request->cote_par_agent;
        $bn['type_acte'] = $request->type_acte;
        $bn['cv_ce'] = $request->cv_ce;
        $bn['montant'] = $request->montant;
        $bon->update($bn);

        return redirect()->route('gest.bons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bon = Bon::findOrFail($id);
        $bon->delete();

        return redirect()->route('gest.bons.index');
    }

    public function print()
    {
        $user = User::all();
        $bons = bon::orderBy('id','asc')->paginate(10);
        return view('gestionnaire.bons.print', compact('bons','user'));
    }
}
