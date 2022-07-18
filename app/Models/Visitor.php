<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
  use HasFactory;

protected $foreign_key = 'clinic_no';

  protected $casts = [
    'reason_for_visiting' => 'array',
    
  ];

  public function client(){
    return $this->belongsTo(Client::class,'clinic_no','clinic_no');
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function generalOPD()
  {
    return $this->hasMany(GeneralOPD::class);
  }

  public function referral()
  {
    return $this->hasMany(Referral::class);
  }
}
