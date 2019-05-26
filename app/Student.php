<?php

namespace App;
use App\Outlay;
use App\Subject;
use App\Lecture;
class Student extends Model
{
    public function outlay()
    {
    	return $this->hasMany(Outlay::class);
    }

    public function subjects()
    {
    	return $this->belongsToMany(Subject::class,'student_subject');
    }

    public function lecture()
    {
    	return $this->belongsTo(Lecture::class);
    }
}
