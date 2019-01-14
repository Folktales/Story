<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewAudioController extends Controller
{
    public function index()
    {
    	 $users = DB::select('select * from audio');
         //validation for database
                  
         if(!$users)
         {         	

         	echo "<script>alert('No Folktales in database'); window.location.href='http://127.0.0.1:8000/audio';
                  </script>";
         }
         else
         {
         	return view('viewAudio',['users'=>$users]);
         }
         
    }
}
