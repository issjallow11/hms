<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SexualOrientation extends Model
{
  use HasFactory;

  

  public function client(){
    return $this->hasOne(SexualOrientation::class);
  }
}
