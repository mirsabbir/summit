<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth:api')->except('index');
    }

    public function index(Request $request, $comment_id){

    }
    public function update(Request $request, $comment_id){

    }


}
