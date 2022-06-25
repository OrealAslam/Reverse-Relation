<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class CourseController extends Controller
{
    public function addCourse(){
        
        if($this->addUser()){
            $course = new Course();
            $course->course_name = 'Python';
            $course->course_desc = 'Become Pyhton expert';       
            $course->user_id = $user->id;
            $course->save();
        }
        
    }

    publiic function addUser(){
        $user = new User();
        $user->name = 'Test User';
        $user->email = 'test@example.com';
        $user->password = '123456';
        $user->save();
        return $user;
    }
}
