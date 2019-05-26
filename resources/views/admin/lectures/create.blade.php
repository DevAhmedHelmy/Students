
@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
  </h1>
  <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="/lectures"><i class="fa fa-book"></i> Lecture</a></li>
      <li class="active"><i class="fa fa-plus"></i> Add New Lecture</li>
  </ol>

@endsection


@section('content')

	

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="col-md-6 col-md-offset-3">
            <form role="form" action="/lectures" method="POST">
            	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                <label>Subject Name</label>
                <select class="form-control" name="subject_id">
                  @if(isset($subjects))
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->name}}</option>
                      @endforeach
                    @endif
                </select>
              </div>
                <div class="form-group">
                  <label>Lecture Time</label>
                  <input type="time" class="form-control" name="lecture_time" required>
                </div>
                <div class="form-group">
                <label>Doctor Name</label>
                <select class="form-control" name="doctor_id">
                	@if(isset($doctors))
	                	@foreach($doctors as $doctor)
	                    	<option value="{{$doctor->id}}">{{$doctor->name}}</option>
	                    @endforeach
                    @endif
                </select>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
              </div>
              @include('admin/layouts.errors')
            </form>
          </div>
</div>
@endsection

