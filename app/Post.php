<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Posts class instance will refer to posts table in database
class Posts extends Model
{
  //restricts columns from modifying
  protected $guarded = [];

  // posts has many comments
  // returns all comments on that post
  public function comments()
  {
    return $this->hasMany('App\Comments', 'on_post');
  }

  // returns the instance of the user who is author of that post
  public function author()
  {
    return $this->belongsTo('App\User', 'author_id');
  }
}
