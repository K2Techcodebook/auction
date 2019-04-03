<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id','item_id', 'item_img', 'bid_token','start_time','end_time'
  ];
}
