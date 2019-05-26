@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Add New Student</small>
  </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/students"><i class="fa fa-graduation-cap"></i> Students</a></li>
        <li class="active">Add New Student</li>
    </ol>

@endsection


@section('content')
<div class="row">
  <div class="box box-primary">
    <div class="col-md-6 col-md-offset-3">

        <div class="box-header with-border">
          <h2 class="box-title">Student Register</h2>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="/students" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputName">Student Name</label>
              <input type="text" class="form-control" id="exampleInputName" placeholder="Student Name" name="name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
              <label>Password Confirmation</label>
              <input type="password" class="form-control" placeholder="Password" name="password_confirmation" required>
            </div>
            <div class="form-group">
              <label for="exampleInputAddress">Address</label>
              <input type="text" class="form-control" id="exampleInputAddress" placeholder="Address" name="address" required>
            </div>
            <div class="form-group">
                <label>Birth Day:</label>
                  <input type="date" class="form-control" name="birth_day" required>
              </div>
              <div class="form-group">
                  <label>Student phone:</label>
                  <input type="text" class="form-control" name="phone" required>

                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="subject[]" value="1">
                      Arabic
                    </label>
                  </div>

                  <div class="checkbox" name>
                    <label>
                      <input type="checkbox" name="subject[]" value="2">
                      English
                    </label>
                  </div>
                </div>
            <div class="form-group">
              <label for="exampleInputFile">Upload Photo</label>
              <input type="file" id="exampleInputFile" name="photo" required />
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
          </div>
          @include('admin/layouts.errors')
        </form>
    </div>
  </div>
</div>

@endsection
