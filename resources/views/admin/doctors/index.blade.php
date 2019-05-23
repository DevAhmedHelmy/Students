@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Doctors</li>
  </ol>

@endsection


@section('content')
    <h1>Hello in The Doctors Page</h1>
    <div>
      <h2><a class="btn btn-primary" href="/doctors/create">Add New Doctor</a></h2>
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
                  <th>Doctor Name</th>
                  <th>Email</th>
                  <th>Degree</th>
                  <th>Address</th>
                  <th>BirthDay</th>
                  <th>phone</th>
                  <th>Created_At</th>
                  <th>Control</th>
                </tr>
                @if(isset($doctors))
                  @foreach($doctors as $doctor)
                  <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->degree}}</td>
                    <td>{{$doctor->address}}</td>
                    <td>{{$doctor->birthday}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->created_at}}</td>
                    <td>
                      <a href="/doctors/{{$doctor->id}}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View Doctor">
                        <i class="fa fa-eye fa-1x"></i></a>
                      <a href="/doctors/edit/{{$doctor->id}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Doctor">
                        <i class="fa fa-edit fa-1x"></i></a>
                      <a href="/doctors/delete/{{$doctor->id}}"class="btn btn-danger" onclick="if(!confirm('Do you want delete this Doctor')) return false;" data-toggle="tooltip" data-placement="top" title="Delete Student">
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
