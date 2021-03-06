<?php

namespace App;

use App\Lecture;
use App\Subject;

class Doctor extends Model
{
    public function lectures()
    {
    	return $this->hasMany(Lecture::class);
    }

    public function subjects()
    {
    	return $this->hasMany(Subject::class);
    }
}
