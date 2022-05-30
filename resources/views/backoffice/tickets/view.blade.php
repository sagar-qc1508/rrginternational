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
        <?php if ($ticket->status == 'Open') { ?>
            <div class="form-group">
                <a href="{{ route('backoffice.supporttickets.closeticket',$ticket->ticket_id) }}" class="btn btn-primary">Close Ticket</a>
            </div>
        <?php } ?>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Ticket No : </label>
            </div>
            <div class="col-md-9">
                #<?php echo $ticket->ticket_no; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Subject : </label>
            </div>
            <div class="col-md-9">
                <?php echo $ticket->subject; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Detail : </label>
            </div>
            <div class="col-md-9">
                <?php echo $ticket->detail; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Priority : </label>
            </div>
            <div class="col-md-9">
                <span class="badge badge-<?php echo $ticket->priority; ?>"><?php echo $ticket->priority; ?></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Status : </label>
            </div>
            <div class="col-md-9">
                <span class="badge badge-<?php echo $ticket->status; ?>"><?php echo $ticket->status; ?></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Attachment : </label>
            </div>
            <div class="col-md-9">
                <?php if (!empty($ticket->attachment)) { ?>
                    <a href="{{ asset('storage/tickets/'.$ticket->attachment) }}" target="_blank">Download</a>
                <?php } ?>
            </div>
        </div>
        <?php
        $replies = DB::table('ticketreplies')->join('users', 'ticketreplies.user_id', '=', 'users.user_id')->where('ticket_id', $ticket->ticket_id)->select('ticketreplies.*', 'users.*', 'ticketreplies.created_at as reply_time')->get();
        foreach ($replies as $reply) { ?>
            <div class="reply-div">
                <div class="media mb-4 mt-1">
                    <?php if ($reply->role != '2') { ?>
                        <img class="d-flex mr-2 rounded-circle avatar-sm" src="{{ asset('storage/adminusers/'.$reply->profile) }}" onerror="src='{{ asset("assets/images/users/user.png") }}'">
                    <?php } else { ?>
                        <img class="d-flex mr-2 rounded-circle avatar-sm" src="{{ asset('storage/adminprofile/'.$reply->profile) }}" onerror="src='{{ asset("assets/images/users/user.png") }}'">
                    <?php } ?>
                    <div class="media-body">
                        <span class="float-right"><?php echo date('d/m/Y h:i A', strtotime($reply->reply_time)); ?></span>
                        <h6 class="m-0 font-15 font-weight-bold"><?php echo $reply->fullname; ?></h6>
                        <small class="text-muted">From: <?php echo $reply->email; ?></small>
                    </div>
                </div>
                <p><?php echo $reply->detail; ?></p>
                <?php if (!empty($reply->attachment)) { ?>
                    <a href="{{ asset('storage/tickets/'.$ticket->attachment) }}" target="_blank">Download Attachment</a>
                <?php } ?>
            </div>
        <?php }
        if ($ticket->status == 'Open') {
        ?>
            <form class="form-horizontal mt-5" method="post" action="{{ route('backoffice.supporttickets.reply') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group floating-label enable-floating-label show-label">
                    <label>Reply: <i class="text-danger">*</i></label>
                    <textarea name="reply" class="form-control"><?php echo (!empty($requestdata->reply)) ? $requestdata->reply : '' ?></textarea>
                    @error('reply')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group floating-label enable-floating-label show-label">
                    <label>Attachment: </label>
                    <input type="file" class="form-control" name="attachment" />
                    @error('attachment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input type="hidden" name="ticket_id" value="<?php echo $ticket->ticket_id; ?>" />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
@stop