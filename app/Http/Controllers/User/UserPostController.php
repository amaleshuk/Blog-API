<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserPostController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth:api',['only'=>['index']]);
    }
    public function index()
    {
        
       
            $user = auth()->user();           
            $posts = $user->posts;
            return $this->showAll($posts);
        
    }

    
}
