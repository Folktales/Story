<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index()
    {
    	if(View::exists('pages.index.'))
    		return view('pages.index');
    	else
    		return 'No views in PagesController';
    }

    public function profile()
    {
    	return view('pages.profile');
    }
}
