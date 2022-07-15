<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralOPD extends Model
{
    use HasFactory;

    public function visitor()
    {
      return $this->belongsTo(Visitor::class);
    }
}
