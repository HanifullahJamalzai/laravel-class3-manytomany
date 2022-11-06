<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'courses_students', 'course_id', 'student_id');
    }
}
