<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
  use HasFactory;

  protected $foreign_key = 'clinic_no';

  public function client()
  {
    return $this->belongsTo(Client::class, 'clinic_no','clinic_no');
  }

  protected $casts = [
    'medical_history' => 'array',
  ];
}
