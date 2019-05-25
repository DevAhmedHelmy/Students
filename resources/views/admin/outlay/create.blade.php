@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Outlay</li>
  </ol>

@endsection


@section('content')

	

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="col-md-6 col-md-offset-3">
            <form role="form" action="/outlay" method="POST">
            	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Outlay</label>
                  <input type="number" class="form-control" name="outlay" required>
                </div>
                <div class="form-group">
                <label>Student Name</label>
                <select class="form-control" name="student_id">
                	@if(isset($students))
	                	@foreach($students as $student)
	                    	<option value="{{$student->id}}">{{$student->name}}</option>
	                    @endforeach
                    @endif
                </select>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
              </div>
            </form>
          </div>
</div>
@endsection

