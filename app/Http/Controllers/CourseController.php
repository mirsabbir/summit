<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    //

    public function __construct(){
        
    }



    public function index(Request $request,$course_code){
        

        if(!Course::where('code',$course_code)->exists()){
            return response()
                ->view('error');
        }
        // course exists
        $row = Course::where('code',$course_code)->get();
        $data = $row[0];
        $type = $data['type']==1? 'theory':'lab';

        $posts = Course::where('id',$data['id'])->first()->posts()->latest()->get();

        $courseCode = $data['code'];
        
        return view('courses.'.$type)->with(['courseName'=>$data['name'], 'posts' => $posts,
            'courseCode' => $courseCode,

        ]);


    }


}
