<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Subscription;

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
            } else {
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

    public function coursesx(Request $request)
    {
        # code...

        $courses = Course::with('package')->get();

        $bronzeCourses = $courses->where('package_id', 1);
        $silverCourses = $courses->where('package_id', 2);
        $goldCourses = $courses->where('package_id', 3);
        $diamondCourses = $courses->where('package_id', 4);
        $userSub = Subscription::where('user_id', $request->user()->id)->first();


        $data = compact([
            'userSub',
            'bronzeCourses',
            'silverCourses',
            'goldCourses',
            'diamondCourses'
        ]);

        return $data;
    }
}
