<?php

namespace App;

use App\Subject;
use App\Doctor;
use App\Student;
class Lecture extends Model
{
    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }

    public function doctor()
    {
    	return $this->belongsTo(Doctor::class);
    }

    public function students()
    {
    	return $this->hasMany(Student::class);
    }
}
