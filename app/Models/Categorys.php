<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id', 'categogry_name'
  ];

  public function items(){
    return $this->hasMany(items::class, 'category_id');
  }
}
