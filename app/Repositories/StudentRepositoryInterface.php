<?php

namespace App\Repositories;
use App\Student;

/**
 *
 */
interface StudentRepositoryInterface
{
  /*
  Get's all from db
  */
  public function getAll();

  /*
  Get's a data by ID from db
  */
  public function show(Student $student);

  /*
  edit data by ID from db
  */
  public function edit($id);

  /*
  // deletea data by ID from db
  // */
  public function destroy($id);
}
