<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public $rules =[
        'website_id' => 'required',
        'title' =>'required',
        'description' =>'required'
    ];

    /**
     * Store a newly created post.
     */
    public function store(Request $request)
    {   
        $request->validate($this->rules);
        return Post::create($request->all());
    }

    
}
