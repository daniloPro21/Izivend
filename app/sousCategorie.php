<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sousCategorie extends Model
{
     public function categories()
     {
     return $this->belongsTo('App\categorie','id_sc','id_sc');
     }
}
