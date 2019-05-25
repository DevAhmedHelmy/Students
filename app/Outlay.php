<?php

namespace App;

use App\Student;

class Outlay extends Model
{
    public function student()
    {
    	return $this->belongsTo(Student::class);
    }
}
