<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Doctor;
class DoctorCreateRequest extends FormRequest
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
          'degree'  => 'required',
          'address'  => 'required',
          'birth_day'  => 'required',
          'phone'  => 'required',
          'photo'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function persist()
    {
      $fileName = null;
      if (request()->hasFile('photo'))
      {
        $file = request()->file('photo');
        $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./image/upload/doctors/', $fileName);
      }
      $doctor = Doctor::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => request('password'),
        'degree' => request('degree'),
        'birthday' => request('birth_day'),
        'phone' => request('phone'),
        'phone' => $fileName,
      ]);
      return $doctor;
    }
}
