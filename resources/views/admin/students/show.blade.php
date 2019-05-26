@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="/students"><i class="fa fa-graduation-cap"></i> Students</a></li>
    <li class="active"><i class="fa fa-eye"></i> Show Students</li>
</ol>

@endsection


@section('content')

    @if(isset($student))
    <div class="row panel panel-success" style="margin-top:2%;">
    <div class="panel-heading lead">
        <div class="row">
            <div class="col-lg-8 col-md-8"><i class="fa fa-users"></i> View Student Details </div>
            
            <div class="col-lg-4 col-md-4 text-right">
                <div class="btn-group text-center">

                  <a href="/students/edit/{{$student->id}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit Student">
                    <i class="fa fa-edit fa-1x"></i></a>
                  <a href="/students/delete/{{$student->id}}"class="btn btn-danger" onclick="if(!confirm('Do you want delete this Student')) return false;" data-toggle="tooltip" data-placement="top" title="Delete Student">
                    <i class="fa fa-trash-o fa-1x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
          <div class="col-md-3">
            <div class="text-center">
           <img src="/image/upload/students/{{$student->photo}}" class="img-thumbnail" alt="...">
            </div>
        </div>
            <div class="col-lg-9 col-md-9">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#Summery" class="text-success"><i class="fa fa-indent"></i> Details</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="Summery" class="tab-pane fade in active">
                                <div class="table-responsive panel">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-user"></i>
                                                Student Name </td>
                                            <td>{{$student->name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-envelope"></i>
                                                Email Address</td>
                                            <td>{{$student->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-address-book">
                                                </i> Address</td>
                                            <td>{{$student->address}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-calendar"></i>
                                                Birthday</td>
                                            <td>{{$student->birthday}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-phone"></i>
                                                Phone Number</td>
                                            <td>{{$student->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-clock-o"></i>
                                                Time Register</td>
                                            <td>{{$student->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-clock-o"></i>
                                                Last Update</td>
                                            <td>{{$student->updated_at}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


        </div>
        <!-- /.table-responsive -->
    </div>
</div>

</div>
    @endif
@endsection
