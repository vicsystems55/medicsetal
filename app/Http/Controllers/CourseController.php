<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    //

    public function courses(Request $request)
    {

        if ($request->category) {
            # code...
            if ($request->category == 1) {
                # code...
    
                $courses = Course::with('package')->where('package_id', 1)->get();
            
                return $courses;
            }
    
            if ($request->category == 2) {
                # code...
    
                $courses = Course::with('package')->where('package_id', 2)->get();
            
                return $courses;
            }
    
            if ($request->category == 3) {
                # code...
    
                $courses = Course::with('package')->where('package_id', 3)->get();
            
                return $courses;
            }
    
            if ($request->category == 4) {
                # code...
    
                $courses = Course::with('package')->where('package_id', 4)->get();
            
                return $courses;
            }
    
            else{
                # code...
    
                $courses = Course::with('package')->get();
            
                return $request->al();
            }
        }

        if ($request->course_id) {
            # code...

            try {
                //code...
                $course_details = Course::with('package')->find($request->course_id);

                return $course_details;


            } catch (\Throwable $th) {
                //throw $th;

                return $th;
            }
        }



    }
}
