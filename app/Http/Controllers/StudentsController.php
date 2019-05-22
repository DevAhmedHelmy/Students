<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StudentRepositoryInterface;
use App\Student;
use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentEditRequest;
class StudentsController extends Controller
{
  protected $student;
  public function __construct(StudentRepositoryInterface $student)
  {
    $this->student = $student;
  }
    public function index()
    {
      $students = $this->student->getAll();
      return view('admin/students.index',compact('students'));
    }
    public function show(Student $student)
    {
      return view('admin/students.show',compact('student'));
    }
    public function create()
    {
      return view('admin/students.create');
    }
    public function store(StudentCreateRequest $student)
    {
      $student->persist();
      session()->flash('message', 'Student is Add');
      return redirect('/students');
    }
    public function edit($id)
    {
      $student = $this->student->edit($id);
      return view('admin/students.edit',compact('student'));
    }
    public function update(StudentEditRequest $student ,$id)
    {
      $student->persist($id);
      session()->flash('message', 'Student is update');
      return redirect('/students');
    }
    public function destroy($id)
    {
      $this->student->destroy($id);
      session()->flash('message', 'Student is delete');
      return redirect('/students');
    }

}
