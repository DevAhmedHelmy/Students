<?php

namespace App\Http\Controllers;
use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorCreateRequest;
use App\Http\Requests\DoctorEditRequest;
use App\Repositories\DoctorRepositoryInterface;
class DoctorsController extends Controller
{
  protected $doctor;
  public function __construct(DoctorRepositoryInterface $doctor)
  {
    $this->doctor = $doctor;
  }
    public function index()
    {
      $doctors = $this->doctor->getAll();
      return view('admin/doctors.index',compact('doctors'));
    }
    public function create()
    {
      return view('admin/doctors.create');
    }
    public function store(DoctorCreateRequest $doctor)
    {

      $doctor->persist();

      session()->flash('message', 'Doctor is Add');
      return redirect('/doctors');
    }
    public function show(Doctor $doctor)
    {
      $doctor = $this->doctor->show($doctor);
      return view('admin/doctors.show',compact('doctor'));
    }
    public function edit($id)
    {
      $doctor = $this->doctor->edit($id);
      return view('admin/doctors.edit',compact('doctor'));
    }
    public function update(DoctorEditRequest $doctor,$id)
    {
      $doctor->persist($id);
      session()->flash('message', 'Doctor is Update');
      return redirect('/doctors');
    }
    public function destroy($id)
    {
      $this->doctor->destroy($id);
      session()->flash('message', 'Doctor is delete');
      return redirect('/doctors');
    }
}
