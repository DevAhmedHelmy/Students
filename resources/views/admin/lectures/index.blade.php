
@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-book"></i> Lecture</li>
  </ol>

@endsection


@section('content')
	<h1>Hello in The Lecture Page</h1>
    <div>
      <h2><a class="btn btn-primary" href="/lectures/create">Add New Lecture</a></h2>
    </div>
  <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>

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
                <tbody><tr>
                  <th>ID</th>
                  <th>Subject Name</th>
                  <th>Doctor Name</th>
                  <th>Lecture Time</th>
                  <th>Control</th>
                </tr>
                @if(isset($lectures))
                @foreach($lectures as $lecture)
                <tr>
                  <td>{{$lecture->id}}</td>
                  <td>{{$lecture->subject->name}}</td>
                  <td>{{$lecture->doctor->name}}</td>
                  <td>{{$lecture->lecture_time}}</td>
                  <td>
                      
                      <a href="/lectures/edit/{{$lecture->id}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Lecture">
                        <i class="fa fa-edit fa-1x"></i></a>
                      <a href="/lectures/delete/{{$lecture->id}}"class="btn btn-danger" onclick="if(!confirm('Do you want delete this Lecture')) return false;" data-toggle="tooltip" data-placement="top" title="Delete Lecture">
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