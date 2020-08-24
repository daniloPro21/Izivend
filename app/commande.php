<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
     public function produits()
     {
     return $this->hasMany('App\produit','id_prod','id_prod');
     }
      public function factures()
      {
      return $this->belongsTo('App\facture','id_fact','id_fact');
      }
        public function paiements()
        {
        return $this->hasOneThrough(
        'App\paiement',
        'App\facture',
        'id_cmd', 
        'id_fact', 
        'id_cmd', 
        'id_fact' 
        );
        }
}
