<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use App\Models\Post;

  

class PostController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index(Request $request)

    {

        $comments = Post::find(1)->comments;

  

        dd($comments);

    }

}