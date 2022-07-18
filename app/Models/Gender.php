<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
  use HasFactory;
  
  // protected $foreign_key = 'clinic_no';
  
  public function client(){
    return $this->hasOne(Client::class,);
  }
}
