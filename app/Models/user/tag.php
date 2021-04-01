<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->belongsToMany('App\Models\user\post','post_tags')->orderBy('created_at','DESC')->simplePaginate(5);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
