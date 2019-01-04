<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;

class AudioController extends Controller
{

    public function index()
    {

       //echo phpinfo();
      return view('audio');
    }


    public function store(Request $request)
    {
       
       

       $audio = $request->file('audio-folktale');

       $new_name = $audio->getClientOriginalName();

       $audio->move(public_path('audios'), $new_name);

           $request->validate([
            
              'title' => 'required:max:25',
              'author' => 'required'

           ]);

           auth()->user()->audios()->create([
               'title' => $request->get('title'),
               'author' => $request->get('author'),
               'audio' => $request->get('audio',$audio)
             
           ]);

           return back()->with('message', 'Your file is submited Successfully');



       /*if($file = $request->file('file'))
     {
           $name = $file->getClientOriginalName();
           if($file->move('audios',$name))
           {
            $post = new Post();
            $post->audio = $name;
            $post->save();
            return redirect()->route('home');
           }
     }
     return redirect()->back();*/
    }

}


