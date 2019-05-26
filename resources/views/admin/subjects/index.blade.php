
@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-book"></i> Subject</li>
  </ol>

@endsection


@section('content')
	<h1>Hello in The Subjects Page</h1>
    <div>
      <h2><a class="btn btn-primary" href="/subjects/create">Add New Subject</a></h2>
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
                  <th>Control</th>
                </tr>
                @if(isset($subjects))
                @foreach($subjects as $subject)
                <tr>
                  <td>{{$subject->id}}</td>
                  <td>{{$subject->name}}</td>
                  <td>{{$subject->doctor->name}}</td>
                  <td>
                      
                      <a href="/subjects/edit/{{$subject->id}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Subject">
                        <i class="fa fa-edit fa-1x"></i></a>
                      <a href="/subjects/delete/{{$subject->id}}"class="btn btn-danger" onclick="if(!confirm('Do you want delete this Subject')) return false;" data-toggle="tooltip" data-placement="top" title="Delete Subject">
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