<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
     public function categories()
     {
     return $this->belongsTo('App\categorie','id_cat','id_cat');
     }

     public function fournisseurs()
     {
     return $this->belongsTo('App\fournisseur','id_four','id_four');
     }

}
