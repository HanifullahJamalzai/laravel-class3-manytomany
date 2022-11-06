<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function add()
    {
        $course = Course::find(3);
        $course->students()->attach([1,6,7,4,9]);
    }

    public function delete()
    {
        $course = Course::find(3);
        $course->students()->detach([1,7,4]);

    }

    public function update()
    {
        $course = Course::find(3);
        $course->students()->sync([1,2,5,7,9,3]);
    }
    
}
