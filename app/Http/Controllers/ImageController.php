<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;
 
class ImageController extends Controller
{
	/**
	* Generate Image upload view page
	*/
    public function index(){
    	return view('imageUpload');
    }
 
 
    /**
    * Upload Image file to folder
    */
    public function uploadFiles(Request $request)
    {
    	if($request->hasFile('file'))
    	{
    		$imageFile = $request->file('file');
    		$imageName = uniqid().$imageFile->getClientOriginalName();
    		$imageFile->move(public_path('uploads'), $imageName);
    	}
    	return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }
}