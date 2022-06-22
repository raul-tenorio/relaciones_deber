<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    use HasFactory;

    // RELACIÓN DE UNO A MUCHOS
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
