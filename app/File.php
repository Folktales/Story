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

    /*public function updateUser($data)
    {
        $User = $this->find($data['id']);
        $User->user_id = auth()->user()->id;
        $User->title = $data['title'];
        $User->author = $data['author'];
        $User->overview = $data['overview'];
        $User->story =$data['story'];
        
        $User->save();
        return 1;
    }*/
}