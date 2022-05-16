<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;

    public function client()
    {
      return $this->belongsTo(Client::class);
    }

    protected $casts = [
      'medical_history' => 'array',
    ];
}
