<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bids extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id','user_id', 'item_id', 'token'
  ];
}
