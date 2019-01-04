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
              'author' => 'required'

           ]);

           auth()->user()->videos()->create([
                
               'title' => $request->get('title'),
               'author' => $request->get('author'),
               'video' => $request->get('video',$new_name)
             
           ]);

           return back()->with('message', 'Your file is submited Successfully');

            
    }
}
