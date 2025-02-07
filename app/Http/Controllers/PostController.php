<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(){
        $data = Post::get();
        return $data;
    }
}
