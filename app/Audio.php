<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $fillable = [
     'title',
     'author',
     'audio'
    ];

    public function user()
    { 
      return $this->belongsTo(User::class);
    }
}
