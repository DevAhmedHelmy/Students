<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use App\Student;


class StudentCreateRequest extends FormRequest
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
            'email'  => 'required|email',
            'password'  => 'required|confirmed',
            'address'  => 'required',
            'birth_day'  => 'required',
            'phone'  => 'required',
            'photo'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function persist()
    {
        // create and save the student
        $fileName = null;
        if (request()->hasFile('photo'))
        {
          $file = request()->file('photo');
          $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
          $file->move('./image/upload/students/', $fileName);
        }
        $student = Student::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'address' => request('address'),
            'birthday' => request('birth_day'),
            'phone' => request('phone'),
            'photo' => $fileName
        ]);
        
        
        return $student;
    }
}
