<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Lecture;
class LectureCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'lecture_time' => 'required',
            
            'doctor_id' => 'required',
            'subject_id'  => 'required'
        ];
    }
    public function persist()
    {
        $lecture = Lecture::create([
            'lecture_time' => request('lecture_time'),
            'doctor_id' => request('doctor_id'),
            'subject_id'  => request('subject_id')
            
        ]);
        return $lecture;
    }
}