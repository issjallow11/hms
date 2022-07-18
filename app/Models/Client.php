<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  use HasFactory;

  public $incrementing = false;
  protected $keyType = 'string';
  protected $primaryKey = 'clinic_no'; 
  
  public function visitor() 
  {
    return $this->hasMany(Visitor::class,'clinic_no','clinic_no');
  }

  public function gender(){
    return $this->belongsTo(Gender::class,'gender_id');
  }

  public function occupation(){
    return $this->belongsTo(Occupation::class,'gender_id');
  }

  public function ethnicity(){
    return $this->belongsTo(Ethnicity::class,'ethnicity_id');
  }

  public function sexualOrientation(){
    return $this->belongsTo(SexualOrientation::class,'sexual_orientation_id');
  }

  public function medicalHistory() 
  {
    return $this->hasMany(MedicalHistory::class,'clinic_no','clinic_no');
  }

  public function generalOPD(){
    return $this->hasManyThrough(GeneralOPD::class, Visitor::class)->latest()->limit(1);
  }

  protected $casts = [
    'medical_history' => 'array',
    'contact_type' => 'array',
    'education_type' => 'array',
  ];
}
