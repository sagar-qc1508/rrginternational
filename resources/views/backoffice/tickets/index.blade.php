@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Tickets</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="row">
        <div class="col-md-3">
                <a href="{{ route('backoffice.supporttickets.create') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    New Ticket
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.supporttickets') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
                            <?php } else { ?>
                                <button type="submit" name="search" class="icon"><i class="fa fa-search"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div>
    <?php if ($tickets->count() > 0) { ?>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@sortablelink('ticket_no','Ticket No')</th>
                        <th>@sortablelink('department','Department')</th>
                        <th>@sortablelink('student_id','Student ID')</th>
                        <th>@sortablelink('student_name','Student Name')</th>
                        <th>@sortablelink('subject','Subject')</th>
                        <th>@sortablelink('priority','Priority')</th>
                        <th>@sortablelink('status','Status')</th>
                        <th>@sortablelink('updated_at','Updated At')</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tickets as $key => $ticket) { ?>
                        <tr>
                            <td><?php echo $tickets->firstItem() + $key; ?></td>
                            <td>#<?php echo $ticket->ticket_no; ?></td>
                            <td><?php echo $ticket->department; ?></td>
                            <td>#<?php echo $ticket->student_id; ?></td>
                            <td><?php echo $ticket->student_name; ?></td>
                            <td><?php echo $ticket->subject; ?></td>
                            <td><span class="badge badge-<?php echo $ticket->priority; ?>"><?php echo $ticket->priority; ?></span></td>
                            <td><span class="badge badge-<?php echo $ticket->status; ?>"><?php echo $ticket->status; ?></span></td>
                            <td><?php echo date('d-m-Y h:i A', strtotime($ticket->updated_at)); ?></td>
                            <td>
                                <a class="edit-detail" href="{{ route('backoffice.supporttickets.view',$ticket->ticket_id) }}">View</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        {!! $tickets->appends(\Request::except('page'))->render() !!}
    <?php } else { ?>
        <div class="no-record text-center">
            <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
            <h4>No record found</h4>
        </div>
    <?php } ?>
</div>
@stop