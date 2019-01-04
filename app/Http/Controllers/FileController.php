<?php
use App\File;
use App\upload;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
	// public function create() {
	// return view('files.create');
	// 	}
     public function store(Request $request)
    {
      
       
       $image = $request->file('image-folktales');

       $new_name = $image->getClientOriginalName();

       $image->move(public_path('images'), $new_name);

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
        'image'=>$request->get('image',$new_name)
        
      ]);

      return redirect()->route('home');      
    
   }

   
 //   public function upload()
	// {
 //   return 'x';
	// }

	// public function multifileupload()
 //    {
 //        return view('dropzoneJs');
 //    }

 //     public function storeimage(Request $request)
 //    {
    	
 //    	$image = $request->file('file');
 //        $imageName = time().$image->getClientOriginalName();
 //        $upload_success = $image->move(public_path('images'),$imageName);
        
 //        if ($upload_success) {
 //            return response()->json($upload_success, 200);
 //        }
 //        // Else, return error 400
 //        else {
 //            return response()->json('error', 400);
 //        }
 //    }
}

