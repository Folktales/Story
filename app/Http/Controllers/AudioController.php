<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AudioController extends Controller
{
    public function index()
    {
    	return view('audio');
    }


    public function store(Request $request)
    {
    	 
           $request->validate([
            
              'title' => 'required:max:25',
              'author' => 'required'
              

           ]);

           auth()->user()->audios()->create([
               'title' => $request->get('title'),
               'author' => $request->get('author'),
               'audio' => $request->get('audio')
             
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
