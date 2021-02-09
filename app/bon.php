<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bon extends Model
{
    protected $guarded = [];

    protected $fillable = ['n_engistrement', 'matricule', 'cnrps', 'nom', 'prenom', 'n_bon', 'date', 'uf', 'cote_par_agent', 'type_acte', 'cv_ce', 'montant'];

    public function agents()
    {
        return $this->belongsTo(Agent::class);
    }

    public function agents_fiches()
    {
        return $this->belongsTo(Agent_Fiche::class);
    }
}
