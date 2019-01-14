<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
    	return view('video');
    }

    public function store(Request $request)
    {

       $video = $request->file('video-folktale');

       $new_name = $video->getClientOriginalName();

       $video->move(public_path('videos'), $new_name);
  

       $request->validate([
            
              'title' => 'required:max:25',
              'author' => 'required',
              'video' => 'video|mimes:mp4,3gp,ogg'

           ]);

           auth()->user()->videos()->create([
                
               'title' => $request->get('title'),
               'author' => $request->get('author'),
               'video' => $request->get('video',$new_name)
             
           ]);

           return redirect()->route('viewVideo');            
    }

    public function destroy($id)
    {
        $Video = \App\Video::find($id);
        $Video->delete();
        return redirect('/viewVideo')->with('success', 'Folktales has been deleted!!');
    }
}
