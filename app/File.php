<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model

{
   // use SoftDeletes;

    protected $fillable = [
      'title',
      'overview',
      'author',
      'story',
      'image'
    ];

    public function user()
    { 
      return $this->belongsTo(User::class);
    }
}