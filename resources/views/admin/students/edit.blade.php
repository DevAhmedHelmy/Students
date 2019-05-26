@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Add New Student</small>
  </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="/students"><i class="fa fa-graduation-cap"></i> Students</a></li>
        <li class="active"><i class="fa fa-edit"></i> Edit Student</li>
    </ol>

@endsection


@section('content')
<div class="row">
  <div class="box box-primary">
    <div class="col-md-6 col-md-offset-3">

        <div class="box-header with-border">
          <h2 class="box-title">Edit Student</h2>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @if(isset($student))
        <form role="form" method="POST" action="/students/update/{{$student->id}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          
          <img class="profile-user-img img-responsive img-circle" src="/image/upload/students/{{$student->photo}}" alt="User profile picture">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputName">Student Name</label>
              <input type="text" class="form-control" id="exampleInputName" placeholder="Student Name" name="name" value="{{$student->name}}" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{$student->email}}"  required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="new_password">
            </div>
            <div class="form-group">
              <label>Password Confirmation</label>
              <input type="password" class="form-control" placeholder="Password" name="password_confirmation">
            </div>
            <div class="form-group">
              <label for="exampleInputAddress">Address</label>
              <input type="text" class="form-control" id="exampleInputAddress" placeholder="Address" name="address" value="{{$student->address}}"  required>
            </div>
            <div class="form-group">
                <label>Birth Day:</label>
                  <input type="date" class="form-control" name="birth_day" value="{{$student->birthday}}"  required>
              </div>
              <div class="form-group">
                  <label>Student phone:</label>
                  <input type="text" class="form-control" name="phone" value="{{$student->phone}}" required>

                </div>

            <div class="form-group">
              <label for="exampleInputFile">Upload Photo</label>
              <input type="file" id="exampleInputFile" name="new_photo"/>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
          </div>
          @include('admin/layouts.errors')
        </form>
        @endif
    </div>
  </div>
</div>

@endsection
