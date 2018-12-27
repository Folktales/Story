<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function text()
    {
        return view('text');
    }
<<<<<<< HEAD

    public function view()
    {
        return view('view');
    }

=======
 public function audio()
    {
        return view('audio');
>>>>>>> cfdd85e5240ab9dff243b546adbd886ea7bb446d
    
}
}