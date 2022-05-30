@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Attendance Report</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline search-form">
                    <div class="form-group">
                        <select class="form-control" name="user_id">
                            <option value="">Select User</option>
                            <?php
                            $users = \App\Models\User::where('type', 'student')->get();
                            foreach ($users as $user) { ?>
                                <option value="<?php echo $user->id; ?>"><?php echo $user->fullname; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sml datepicker" placeholder="From Date" name="from_date" value="<?php echo (!empty($_REQUEST['from_date'])) ? $_REQUEST['from_date'] : '' ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sml datepicker" placeholder="To Date" name="to_date" value="<?php echo (!empty($_REQUEST['to_date'])) ? $_REQUEST['to_date'] : '' ?>" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-white" name="search"><i class="fa fa-search"></i></button>
                        <?php if (isset($_REQUEST['search'])) { ?>
                            <a class="btn btn-white" href="{{ route('admin.attendance') }}"><i class="fa fa-times"></i></a>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div>
    <div class="card card-body">
        <?php
        if (isset($_REQUEST['search'])) {
            if ($attendance->count() > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@sortablelink('username','User Name')</th>
                                <th>@sortablelink('in_time','In time')</th>
                                <th>@sortablelink('out_time','Out Time')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($attendance as $key => $atten) { ?>
                                <tr>
                                    <td><?php echo $attendance->firstItem() + $key; ?></td>
                                    <td><?php echo $atten->username; ?></td>
                                    <td><?php echo date('d-m-Y h:i A', strtotime($atten->in_time)); ?></td>
                                    <td><?php echo date('d-m-Y h:i A', strtotime($atten->out_time)); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                {!! $attendance->appends(\Request::except('page'))->render() !!}
            <?php } else { ?>
                <div class="no-record text-center">
                    <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                    <h4>No record found</h4>
                </div>
            <?php }
        } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4 style="color:red">Please search to continue!</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop