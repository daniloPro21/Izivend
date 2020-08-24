<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
     public function produits()
         {
     return $this->belongsTo('App\produit','id_prod','id_user');
         }
     public function users()
         {
     return $this->belongsTo('App\User','id_user','id_user');
         }


}
