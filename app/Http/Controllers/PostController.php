<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
	public function postCreatePost(Request $request)
	{
		//validation
		$post = new Post();
		$post->body = $request['body'];
		$request->user()->posts()->save($post);
		return redirect('view');

	}
}