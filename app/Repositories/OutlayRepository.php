<?php
namespace App\Repositories;
use App\Outlay;
class OutlayRepository implements OutlayRepositoryInterface
{
    public function getAll()
    {
      return Outlay::all();
    }
    public function show($id)
    {
      return Outlay::all()->where('student_id','=',$id);
    }
    public function edit($id)
    {
      return Outlay::find($id);
    }
    public function destroy($id)
    {
      return Outlay::find($id)->delete();
    }
}
