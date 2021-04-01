<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->belongsToMany('App\Models\user\post','category_posts')->orderBy('created_at','DESC')->simplePaginate(2);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
