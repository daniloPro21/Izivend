<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
     public function produits()
     {
     return $this->hasOne('App\produit','id_prod','id_prod');
     }

}
