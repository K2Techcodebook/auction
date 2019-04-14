<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  //
  public function categorys(){
    return $this->belongsTo(Category::class);
  }
}
