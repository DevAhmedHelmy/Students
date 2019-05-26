<?php
namespace App\Repositories;
use App\Lecture;
class LectureRepository implements LectureRepositoryInterface
{
    public function getAll()
    {
      return Lecture::all();
    }
    public function show(Lecture $lecture)
    {
      return $lecture;
    }
    public function edit($id)
    {
      return Lecture::find($id);
    }
    public function destroy($id)
    {
      return Lecture::find($id)->delete();
    }
}
