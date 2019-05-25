<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Outlay;
class OutlayRequest extends FormRequest
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
            'outlay' => 'required'
        ];

    }
    public function persist()
    {
        $outlay = Outlay::create([
            'outlay' => request('outlay'),
            'student_id' => request('student_id')
        ]); 
        return $outlay;
    }
}
