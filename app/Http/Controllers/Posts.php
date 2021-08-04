<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Posts extends Controller
{
    //

    public function list()
    {
        $data= Http::get('http://jsonplaceholder.typicode.com/posts')->json();

        return view('posts', ['data' => $data]);
    }

    public function show()
    {
        
        return view('postContent');
    }
}
