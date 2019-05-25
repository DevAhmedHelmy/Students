<?php

namespace App;
use App\Outlay;


class Student extends Model
{
    public function outlay()
    {
    	return $this->hasMany(Outlay::class);
    }
}
