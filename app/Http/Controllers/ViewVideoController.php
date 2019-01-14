<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewVideoController extends Controller
{
         public function index()
         {
         	$users = DB::select('select * from videos');
         	//validation for database    
            if(!$users)
	         {         	

	         	echo "<script>alert('No Folktales in database'); window.location.href='http://127.0.0.1:8000/video';
	                  </script>";
	         }
	         else
	         {
	         	return view('viewVideo',['users'=>$users]);
	         } 
	      }         
}
