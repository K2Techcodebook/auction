<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id','item_name', 'item_img', 'bid_token','start_time','end_time','description','category_id'
  ];


 public function itemsImages(){
  return $this->hasMany('App\Models\items_image','item_id');

 }

}
