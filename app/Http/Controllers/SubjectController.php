<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests\SubjectCreateRequest;
use App\Http\Requests\SubjectEditRequest;
use App\Repositories\SubjectRepositoryInterface;
class SubjectController extends Controller
{
	protected $subject;

	public function __construct(SubjectRepositoryInterface $subject)
	{
		$this->subject = $subject;
	}

	public function index()
    {
    	$subjects = $this->subject->getAll();
    	return view('admin/subjects.index',compact('subjects'));
    }
    public function create()
    {
    	$doctors = Doctor::all();
    	return view('admin/subjects.create',compact('doctors'));
    }


    public function store(SubjectCreateRequest $subject)
    {
		$subject->persist();
      session()->flash('message', 'Subject is Add');
      return redirect('/subjects');
    }
    public function edit($id)
    {
      $subject = $this->subject->edit($id);
      $doctors = Doctor::all();
      return view('admin/subjects.edit',compact('subject','doctors'));
    }
    public function update(SubjectEditRequest $subject ,$id)
    {
      $subject->persist($id);
      session()->flash('message', 'Subject is update');
      return redirect('/subjects');
    }
    public function destroy($id)
    {
      $this->subject->destroy($id);
      session()->flash('message', 'Subject is delete');
      return redirect('/subjects');
    }
}
