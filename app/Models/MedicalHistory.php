<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
  use HasFactory;

  protected $foreign_key = 'client_no';

  public function client()
  {
    return $this->belongsTo(Client::class, 'client_no', 'client_no');
  }

  public function medicalCondition()
  {
    return $this->hasMany(Visitor::class, 'client_no', 'client_no');
  }

  public function visitors()
  {
    return $this->belongsToMany(Visitor::class);
  }

  protected $casts = [
    'medical_history' => 'array',
  ];
}
