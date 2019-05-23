@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="/doctors"><i class="fa fa-dashboard"></i> Doctors</a></li>
      <li class="active"><i class="fa fa-plus"></i> Add New Doctors</li>
  </ol>

@endsection


@section('content')
    <h1>Add New Doctors</h1>
    <div class="row">
      <div class="box box-info">
          <div class="box-header with-border" style="text-align: -webkit-center">
            <h2 class="box-title">Add New Doctor</h2>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <div class="col-md-8 col-md-offset-2">
          <form class="form-horizontal" method="POST" action="/doctors" enctype="multipart/form-data">
              {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">Doctor Name</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName3" name="name" placeholder="Doctor Name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" name="email"  placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password"  placeholder="Password" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password Confirmation</label>

                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password_confirmation" placeholder="Password Confirmation" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Degree</label>

                <div class="col-sm-10">
                  <select class="form-control" name="degree">
                    <option>Professor Dr</option>
                    <option>Doctor</option>
                    <option>Assistant Professor</option>
                    <option>Teaching Assistant</option>

                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Address</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="exampleInputAddress" placeholder="Address" name="address" required>

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">BirthDay</label>

                <div class="col-sm-10">
                  <input type="date" class="form-control" name="birth_day" required>

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Doctor Phone</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone" required>

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Upload Photo</label>

                <div class="col-sm-10">
                  <input type="file" id="exampleInputFile" name="photo" required />

                </div>
              </div>
            <!-- /.box-body -->
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Add Doctor</label>

              <div class="col-sm-10">
                <input type="submit" class="btn btn-info" class="form-control" Value = "Save"/>
              </div>
            </div>
            @include('admin/layouts.errors')
          </form>
        </div>
        </div>
    </div>
@endsection
