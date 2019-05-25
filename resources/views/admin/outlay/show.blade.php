@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Dashboard
    <small>Statistics Overview</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="/outlay"><i class="fa fa-money"></i> Outlays</a></li>
    <li class="active"><i class="fa fa-money"></i> Show Outlay</li>
</ol>

@endsection


@section('content')

    @if(isset($outlays))
    <div class="row panel panel-success" style="margin-top:2%;">
    <div class="panel-heading lead">
        <div class="row">
            <div class="col-lg-8 col-md-8"><i class="fa fa-users"></i> View Outlay Details</div>
            <div class="col-lg-4 col-md-4 text-right">
                
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
          
            <div class="col-md-8 col-md-offset-4 ">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#Summery" class="text-success"><i class="fa fa-indent"></i> Details</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="Summery" class="tab-pane fade in active">
                                <div class="table-responsive panel">
                                    <table class="table">
                                        @foreach($outlays as $outlay)
                                            <tbody>
                                        
                                            <tr>
                                                <td class="text-success"><i class="fa fa-user"></i>
                                                    Student Name </td>
                                                <td>{{$outlay->student->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-success"><i class="fa fa-envelope"></i>
                                                    Outlay</td>
                                                <td>
                                                <span class="badge bg-light-blue">{{$outlay->outlay}} L.E</span>
                                                </td>
                                            </tr>
                                    
                                            <tr>
                                                <td class="text-success"><i class="fa fa-clock-o"></i>
                                                    Time Register</td>
                                                <td><span class="badge bg-green">{{$outlay->created_at->toDayDateTimeString()}}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-success"><i class="fa fa-clock-o"></i>
                                                    Last Update</td>
                                                <td><span class="badge bg-yellow">{{$outlay->updated_at->toDayDateTimeString()}}</span></td>
                                            </tr>
                                            
                                            </tbody>
                                        @endforeach
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
