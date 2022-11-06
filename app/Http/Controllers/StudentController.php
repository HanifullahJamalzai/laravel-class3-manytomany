<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add()
    {
        $student = Student::find(1);
        $student->courses()->attach([1,2,4,7]);

    }
    public function delete()
    {
        $student = Student::find(1);
        $student->courses()->detach([2,4]);
    }

    public function update()
    {
        $student = Student::find(1);
        $student->courses()->sync([1,3,2,5,7,9]);
    }
}
