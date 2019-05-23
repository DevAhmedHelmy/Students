@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="/doctors">Doctors</a></li>
      <li class="active"><i class="fa fa-edit"></i> Edit Doctor</li>
  </ol>

@endsection


@section('content')
    <h1>Add New Doctors</h1>
    <div class="row">
      <div class="box box-info">
          <div class="box-header with-border" style="text-align: -webkit-center">
            <h2 class="box-title">Edit Doctor</h2>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          @if(isset($doctor))


          <div class="col-md-8 col-md-offset-2">
            <img class="profile-user-img img-responsive img-circle" src="/image/upload/doctors/{{$doctor->photo}}" alt="User profile picture">
          <form class="form-horizontal" method="POST" action="/doctors/update/{{$doctor->id}}" enctype="multipart/form-data">
              {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">Doctor Name</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName3" name="name" value="{{$doctor->name}}">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" name="email" value="{{$doctor->email}}">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="new_password"  placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password Confirmation</label>

                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" name="password_confirmation" placeholder="Password Confirmation">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Degree</label>

                <div class="col-sm-10">
                  <select class="form-control" name="degree">
                    <option>{{isset($doctor) ? $doctor->degree : ''}}</option>
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
                  <input type="text" class="form-control" id="exampleInputAddress" value="{{$doctor->address}}" name="address" required>

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">BirthDay</label>

                <div class="col-sm-10">
                  <input type="date" class="form-control" name="birth_day" value="{{$doctor->birthday}}" required>

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Doctor Phone</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone" value="{{$doctor->phone}}" required>

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Upload Photo</label>

                <div class="col-sm-10">
                  <input type="file" id="exampleInputFile" name="photo"/>

                </div>
              </div>
            <!-- /.box-body -->
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Update Doctor</label>

              <div class="col-sm-10">
                <input type="submit" class="btn btn-info" class="form-control" Value = "Update"/>
              </div>
            </div>
            @include('admin/layouts.errors')
          </form>
        </div>
        </div>
      @endif
    </div>
@endsection
