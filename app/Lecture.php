<?php

namespace App;

use App\Subject;
use App\Doctor;
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
}
