<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Course;

class PostController extends Controller
{
    //


    public function __construct(){
           
    }
    

    public function index(Request $request,$course_code,$post_id){
        // post is stored ?
        
        


        if(!Post::where('id',$post_id)->exists()) return view('error');

        $course = Post::where('id',$post_id)->first()->course;

        if($course['code']!=$course_code) return view('error');

        // now render

        

        $row = Course::where('code',$course_code)->get();
    
        $data = $row[0];
        $type = $data['type']==1? 'theory':'lab';

        $posts = Course::where('id',$data['id'])->first()->posts()->latest()->get();

        $courseCode = $data['code'];

        // calculating comments for this post

        $all = Post::find($post_id)->comments()->latest()->get();

        $comments = [];

        foreach($all as $single){
            $tmp['isadmin'] = $single['type'];
            $tmp['body'] = $single['body'];
            $tmp['id'] = $single['id'];


            if($single['type']==0){ // user
                $instanceOfUser = \App\User::find($single['user_id']);
            } else { // admin
                $instanceOfUser = \App\Admin::find($single['admin_id']);
            }
            $tmp['name'] = $instanceOfUser['name'];
            $tmp['avatar'] = $instanceOfUser['avatar'];
            $tmp['time'] = $single['created_at']    ;
            array_push($comments,$tmp);

        }





        return view('courses.post')->with([
            'courseName'=>$data['name'], 
            'posts' => $posts,
            'courseCode' => $courseCode,
            'content' => Post::where('id','=',(int)$post_id)->first(),
            'comments' => $comments,
            ]
        );


    }

}
