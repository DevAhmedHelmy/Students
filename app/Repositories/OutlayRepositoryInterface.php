<?php

namespace App\Repositories;
use App\Outlay;
/**
 *
 */
interface OutlayRepositoryInterface
{
  /*
  Get's all from db
  */
  public function getAll();

  /*
  Get's a data by ID from db
  */
  public function show($id);

  /*
  edit data by ID from db
  */
  public function edit($id);

  /*
  // deletea data by ID from db
  // */
  public function destroy($id);
}
