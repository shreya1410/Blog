<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
class post extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany('App\Models\user\tag','post_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\user\category','category_posts')->withTimestamps();
    }

    public function getRouteKeyName()
    {
      return 'slug';
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
    public function likes()
    {
        return $this->hasMany('App\Models\user\like');
    }
    public function getSlugAttribute($value)
    {
      // return   Str::slug('post', $value);
        return route('post',$value);
    }
}
