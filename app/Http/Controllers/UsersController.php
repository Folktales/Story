<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\users;

class UsersController extends Controller
{
    public function index()
    {
    	$users = [
		'0' =>[
			'first_name' => 'Dema',
			'last_name' => 'Dorji',
			'location' => 'Thimphu'
		],

		'1' =>[
			'first_name' => 'Passang',
			'last_name' => 'Tenzin',
			'location' => 'Greece'
		]
	];
    return view('admin.users.index', compact('users'));
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());
    	return 'Success';
    	return $request ->all();
    }
}
