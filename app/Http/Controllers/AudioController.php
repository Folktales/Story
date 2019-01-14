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
              'author' => 'required',
              'audio' => 'required:audio|mimes:mp3,wma,ogg,wav'

           ]);

           auth()->user()->audios()->create([
               'title' => $request->get('title'),
               'author' => $request->get('author'),
               'audio' => $request->get('audio',$new_name)
             
           ]);

           return redirect()->route('viewAudio');
    }

    public function destroy($id)
    {
        $Audio = \App\Audio::find($id);
        $Audio->delete();
        return redirect('/viewAudio')->with('success', 'Folktales has been deleted!!');
    }

}


