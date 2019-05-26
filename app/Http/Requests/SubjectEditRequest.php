<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Subject;
class SubjectEditRequest extends FormRequest
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

            'name'  => 'required',
            'doctor_id' => 'required'
        ];
    }
    public function persist($id)
    {
        $subject = Subject::find($id);
        $subject->name = request('name');
        $subject->doctor_id = request('doctor_id');
        $subject->save();
    }
}
