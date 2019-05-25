@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><i class="fa fa-money"></i> Outlay</li>
  </ol>

@endsection
	

@section('content')

	<div class="">
  		<h2><a class="btn btn-primary" href="/outlay/create"><i class="fa fa-money"></i> Pay Outlay</a></h2>
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
                  
                  <th>Student Name</th>
                  <th>Outlay</th>
                  <th>Created_At</th>
                  <th>Control</th>
                </tr>
                @if(isset($outlays))
                  @foreach($outlays as $outlay)
                  <tr>
                    
                    <td>{{$outlay->student->name}}</td>
                    <td><span class="badge bg-light-blue">{{$outlay->outlay}} L.E</span></td>
                    
                    <td><span class="badge bg-green">{{$outlay->created_at->toDayDateTimeString()}}</span></td>
                    <td>
                      <a href="/outlay/{{$outlay->student->id}}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View outlay">
                        <i class="fa fa-eye fa-1x"></i></a>
                      <a href="/outlay/edit/{{$outlay->id}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit outlay">
                        <i class="fa fa-edit fa-1x"></i></a>
                      <a href="/outlay/delete/{{$outlay->id}}"class="btn btn-danger" onclick="if(!confirm('Do you want delete this Outlay')) return false;" data-toggle="tooltip" data-placement="top" title="Delete Outlay">
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

