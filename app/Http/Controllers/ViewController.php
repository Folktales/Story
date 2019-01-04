<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
      public function index()
      {
      $users = DB::select('select image, title,overview, author from files');
         return view('view',['users'=>$users]);
      }
}

