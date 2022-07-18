<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ethnicity extends Model
{
  use HasFactory;

  public function client(){
    return $this->hasOne(Ethnicity::class);
  }
}
