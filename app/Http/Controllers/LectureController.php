<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LectureCreateRequest;
use App\Http\Requests\LectureEditRequest;
use App\Repositories\LectureRepositoryInterface;
use App\Doctor;
use App\Subject;
class LectureController extends Controller
{
	protected $lecture;

	public function __construct(LectureRepositoryInterface $lecture)
	{
		$this->lecture = $lecture;
	}
    public function index()
    {
    	$lectures = $this->lecture->getAll();
    	return view("admin/lectures.index",compact('lectures'));
    }

    public function show()
    {
    	return view("admin/lectures.show");
    }
    public function create()
    {
    	$doctors = Doctor::all();
    	$subjects = Subject::all();
    	return view("admin/lectures.create",compact('doctors','subjects'));
    }

    public function store(LectureCreateRequest $lecture)
    {
		$lecture->persist();

	    session()->flash('message', 'Lecture is Add');
	    return redirect('/lectures');
    }

    public function edit($id)
    {
    	$lecture = $this->lecture->edit($id);
      	$doctors = Doctor::all();
      	$subjects = Subject::all();
    	return view("admin/lectures.edit",compact('lecture','doctors','subjects'));
    }

    public function update(LectureEditRequest $lecture ,$id)
    {
      $lecture->persist($id);
      session()->flash('message', 'Lecture is update');
      return redirect('/lectures');
    }

    public function destroy($id)
    {
      $this->lecture->destroy($id);
      session()->flash('message', 'Lecture is delete');
      return redirect('/lectures');
    }
}
