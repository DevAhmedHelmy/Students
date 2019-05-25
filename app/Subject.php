<?php

namespace App;

use App\Lecture;
class Subject extends Model
{
    public function lectures()
    {
    	return $this->hasMany(Lecture::class);
    }

    public function doctor()
    {
    	return $this->belongsTo(Doctor::class);
    }
}
