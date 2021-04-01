<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->belongsTo('App\Models\user\post','like');
    }
}
