<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche_agents extends Model
{
    protected $guarded = [];

    protected  $fillable = ['matricule', 'cnrps', 'nom', 'prenom', 'n_bon','date', 'uf', 'filiere', 'type_talon', 'montant'];

    public function bons()
    {
        return $this->hasMany(bon::class);
    }

    public function agents()
    {
        return $this->belongsTo(Agent::class);
    }
}
