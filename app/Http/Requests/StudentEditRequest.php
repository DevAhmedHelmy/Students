<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Student;
class StudentEditRequest extends FormRequest
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
          'address'  => 'required',
          'birth_day'  => 'required',
          'phone'  => 'required',

      ];
    }

    public function persist($id)
    {

        $student = Student::find($id);
        $fileName = $student->photo;
        if (request()->hasFile('new_photo'))
        {
          $file = request()->file('new_photo');
          $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
          $file->move('./image/upload/students/', $fileName);
        }
        $student->name=request('name');
        $student->email=request('email');

        if ((request('new_password') && request('password_confirmation')) && (request('new_password') === request('password_confirmation')))

        {
            $student->password=bcrypt(request('new_password'));
        }

        $student->address=request('address');
        $student->birthday=request('birth_day');
        $student->phone=request('phone');
        $student->photo=$fileName;

        $student->save();

    }
}
