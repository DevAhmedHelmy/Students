<?php
namespace App\Repositories;
use App\Subject;
class SubjectRepository implements SubjectRepositoryInterface
{
    public function getAll()
    {
      return Subject::all();
    }
    public function show(Subject $subject)
    {
      return $subject;
    }
    public function edit($id)
    {
      return Subject::find($id);
    }
    public function destroy($id)
    {
      return Subject::find($id)->delete();
    }
}
