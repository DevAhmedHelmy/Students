<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Lecture;
class LectureEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [

            'lecture_time' => 'required',
            
            'doctor_id' => 'required',
            'subject_id'  => 'required'
        ];
    }
    public function persist($id)
    {
        $lecture = Lecture::find($id);
        $lecture->lecture_time = request('lecture_time');
        $lecture->doctor_id = request('doctor_id');
        $lecture->subject_id = request('subject_id');
        $lecture->save();
    }
}
