@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Students</li>
  </ol>

@endsection


@section('content')
    <h1>Hello in The Students Page</h1>
    <div class="">
      <h2><a class="btn btn-primary" href="/students/create">Add New Student</a></h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Email</th>
                  <th>address</th>
                  <th>BirthDay</th>
                  <th>phone</th>
                  <th>Created_At</th>
                  <th>Control</th>
                </tr>
                @if(isset($students))
                  @foreach($students as $student)
                  <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->created_at}}</td>
                    <td>
                      <a href="/students/{{$student->id}}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View Student">
                        <i class="fa fa-eye fa-1x"></i></a>
                      <a href="/students/edit/{{$student->id}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Student">
                        <i class="fa fa-edit fa-1x"></i></a>
                      <a href="/students/delete/{{$student->id}}"class="btn btn-danger" onclick="if(!confirm('Do you want delete this Student')) return false;" data-toggle="tooltip" data-placement="top" title="Delete Student">
                        <i class="fa fa-trash-o fa-1x"></i></a>
                    </td>
                  </tr>
                  @endforeach
                @endif

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@endsection
