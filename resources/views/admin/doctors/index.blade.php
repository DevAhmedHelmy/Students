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
@endsection
