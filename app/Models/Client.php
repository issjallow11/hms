<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function visitor() 
    {
      return $this->hasMany(Visitor::class);
    }

    public function medicalHistory() 
    {
      return $this->hasMany(MedicalHistory::class);
    }

    protected $casts = [
      'medical_history' => 'array',
      'contact_type' => 'array',
      'education_type' => 'array',
    ];
}
