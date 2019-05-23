<?php
namespace App\Repositories;
use App\Doctor;
class DoctorRepository implements DoctorRepositoryInterface
{
    public function getAll()
    {
      return Doctor::all();
    }
    public function show(Doctor $doctor)
    {
      return $doctor;
    }
    public function edit($id)
    {
      return Doctor::find($id);
    }
    public function destroy($id)
    {
      return Doctor::find($id)->delete();
    }
}
