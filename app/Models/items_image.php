<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class items_image extends Model
{
    //

    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id','item_id', 'image'
 ];


    public function items(){
      return $this->belongsTo('App\Models\items');
    }
}
