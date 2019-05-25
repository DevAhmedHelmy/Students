<?php

namespace App\Http\Controllers;
use App\Http\Requests\OutlayRequest;
use Illuminate\Http\Request;
use App\Student;
use App\Outlay;
use App\Repositories\OutlayRepositoryInterface;
class OutlayController extends Controller
{
	protected $outlay;
	public function __construct(OutlayRepositoryInterface $outlay)
	{
		$this->outlay = $outlay;
	}
    public function index()
    {
    	$outlays = $this->outlay->getAll();

    	return view('admin/outlay.index',compact('outlays'));
    }
    public function show($id)
    {
    	$outlays = $this->outlay->show($id);

    	return view('admin/outlay.show',compact('outlays'));
    }
    public function create()
    {
    	$students = Student::all();
    	return view('admin/outlay.create',compact('students'));
    }
    public function store(OutlayRequest $outlay)
    {
    	$outlay->persist();
    	session()->flash('message' , 'Outlay Paied');
    	return redirect('/outlay');
    }
    public function destroy($id)
    {
      $this->outlay->destroy($id);
      session()->flash('message', 'Outlay is delete');
      return redirect('/outlay');
    }
}
