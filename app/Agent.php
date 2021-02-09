<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $guarded = [];

    protected  $fillable = ['matricule', 'nom', 'prenom', 'cnrps'];

    public function  bons()
    {
        return $this->hasMany(bon::class);
    }

    public function  agents_fiches()
    {
        return $this->hasMany(Agent_Fiche::class);
    }
}
