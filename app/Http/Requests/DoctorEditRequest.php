<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Doctor;
class DoctorEditRequest extends FormRequest
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
          'degree'  => 'required',
          'address'  => 'required',
          'birth_day'  => 'required',
          'phone'  => 'required',

        ];
    }
    public function persist($id)
    {
      $doctor = Doctor::find($id);
      $fileName = $doctor->photo;
      if (request()->hasFile('photo'))
      {
        $file = request()->file('photo');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./image/upload/doctors/', $fileName);
      }
      $doctor->name=request('name');
      $doctor->email=request('email');
      $doctor->degree=request('degree');
      if ((request('new_password') && request('password_confirmation')) && (request('new_password') === request('password_confirmation')))

      {
          $doctor->password=bcrypt(request('new_password'));
      }

      $doctor->address=request('address');
      $doctor->birthday=request('birth_day');
      $doctor->phone=request('phone');
      $doctor->photo=$fileName;

      $doctor->save();
    }
}
