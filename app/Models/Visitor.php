<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $casts = [
      'reason_for_visiting' => 'array',
      
    ];

    public function client(){
      return $this->belongsTo(Client::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
