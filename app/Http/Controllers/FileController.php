<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class FileController extends Controller
{        
	
   public function store(Request $request)
    {
             
       // $new_name = $image->getClientOriginalName();

       // $location = $image->move(public_path('images'), $new_name);

       // $imagedb = base64_encode(file_get_contents($request->file('image-folktales')));

        $image = $request->file('image-folktales');
        $path = $image;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);       


      $request->validate([
        'title' => 'required:max:255',
        'overview' => 'required',
        'story'=>'required',
        'author' => 'required'        
        
      ]);

      auth()->user()->files()->create([
        'title' => $request->get('title'),
        'overview' => $request->get('overview'),
        'story'=>$request->get('story'),
        'author' => $request->get('author'),
        'image'=>$request->get('image',  $base64 )        
      ]);

      return redirect()->route('view');      
    
   } 

   public function edit($id) 
   {
        $User = \App\File::find($id);
        return view('edit',compact('User'));
    }

    public function update(Request $request, $id)
    {
       
          $image = $request->file('image-folktales');//calling from name of file in from in edit.blade.php
          $path = $image;
          $type = pathinfo($path, PATHINFO_EXTENSION);
          $data = file_get_contents($path);
          $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);   
        
         $request->validate([        
              'title'=> 'required',
              'author' => 'required',
              'overview' => 'required',
              'story' => 'required',
              'image'=>'image|mimes:png,jpg,jpeg'      
              
          ]);       

          $User = \App\File::find($id);
          $User->title = $request->get('title');
          $User->overview = $request->get('overview');
          $User->story = $request->get('story');
          $User->author = $request->get('author');
          $User->image = $request->get('image',  $base64 );
          $User->save();

          return redirect('/view')->with('Success','Folktales has been Updated!!');               
    }     


    //to delete
    public function destroy($id)
    {
        $User = \App\File::find($id);
        $User->delete();
        //return redirect('/view')->with('success', 'Folktales has been deleted!!');
       echo "<script>alert('Folktales has been successfully deleted!!!'); window.location.href='http://127.0.0.1:8000/view';
                  </script>";
    }

}

