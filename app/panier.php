<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
      public function produits()
      {
      return $this->hasMany('App\produit');
      }
}
