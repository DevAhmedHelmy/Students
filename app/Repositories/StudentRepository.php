<?php
namespace App\Repositories;
use App\Student;
class StudentRepository implements StudentRepositoryInterface
{
  public function getAll()
  {
    return Student::all();
  }

  public function show(Student $student)
  {
    return $student ;
  }

  public function edit($id)
  {
    return Student::find($id);
  }
  public function destroy($id)
  {
    return Student::find($id)->delete();
  }

}
